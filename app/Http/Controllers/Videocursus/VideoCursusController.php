<?php namespace App\Http\Controllers\Videocursus;

use Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use App\Bedrijfsgegevens;
use App\Cursus;
use App\Http\Requests\Webinars\IboraAanmeldRequest;
use App\Http\Requests\Webinars\IboraLoginRequest;
use App\Http\Requests\Webinars\AanbodRequest;
use Mail;
use Carbon\Carbon;
use Hyperized\Wefact\WefactAPI as Wefact;
use Omnipay;
use Log;

class VideoCursusController extends Controller {

	public function index()
	{
		$gateway = Omnipay::gateway('Mollie');
		// $gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');

		$paymeth = $gateway->fetchPaymentMethods()->send();
		if($paymeth->isSuccessful()){
			$methods = $paymeth->getPaymentMethods();
		}
		$issuer = $gateway->fetchIssuers()->send();
		if($issuer->isSuccessful()){
			$issuers = $issuer->getIssuers();
		}

		return view('webinars.salespage.ads-geheimen', compact('methods', 'issuers'));
	}

	public function bedankt(Order $order)
	{
		$order_id = $_GET['order_id'];
		$order = $order->where('order_id','=',$order_id)->first();
		
		$ref = $order->transaction_id;

		$send = Omnipay::gateway('Mollie')->completePurchase(['transactionReference'=>$ref])->send();

		$fetch = Omnipay::gateway('Mollie')->fetchTransaction(['transactionReference'=>$ref])->send();

		$data = [
			'order_id'	=> $order_id,
			'order'		=> $order,
			'ref'		=> $ref,
			'send'		=> $send,
			'fetch'		=> $fetch,
		];

		if($send->isSuccessful()) {

				$pakket_id = $_GET['pakket_id'];
				if($pakket_id == '6') {
					return redirect()->action('Member\MemberIndexController@index')
						->with(['message'=>'We hebben je betaling ontvangen! Je kan nu aan de slag met de geavanceerde cursus. Succes!']);
				}
				// Wanneer de betaling succesvol is, laat bedankpagina zien
				return redirect()->action('Member\MemberAuthController@getLogin')
					->with(['message'=>'Bekijk je inbox, we hebben je account gegevens toegestuurd!']);

			} else {

				if($fetch->getStatus() == 'open'){

					$order->status = $fetch->getStatus();
					$order->save();

					return redirect()->action('Videocursus\VideoCursusController@index')
						->with(['message'=>'We zijn je betaling nog aan het verwerken! Zodra we jouw betaling hebben ontvangen, ontvang je een email van ons met verdere instructies.']);
				
				} else {
					$order->status = $fetch->getStatus();
					$order->save();

					return redirect()->action('Videocursus\VideoCursusController@index')
						->with(['message'=>'Het lijkt er op dat er wat mis is gegaan. Neem a.u.b. <a href="mailto:jeroen@digitusmarketing.nl" target="_blank" title="Neem contact op met Jeroen">contact met ons op</a> en geef de volgende data mee:<br><ul><li>Referentie: '. $ref. '</li><li>Status: '.$fetch->getStatus(). '</li><li>Order id: '. $order_id . '</li></ul>']);
					
				}

			}
	}

	public function store(Order $order, User $usr, AanbodRequest $request, Bedrijfsgegevens $bedrijfsgegevens)
	{
		// $webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum) {
		$user = $usr->where('email', '=', $request->get('email'))->first();
		// dd($user);
		if($user == null)
		{
			$user = new $usr([
				'voornaam'		=> $request->get('voornaam'),
				'achternaam'	=> $request->get('achternaam'),
				'email'			=> $request->get('email'),
			]);
			$user->save();
		}
		// dd($user);
			// $dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
			// $order_id = $dag.'-'.$user->id;
			// dd(route('webinar.aanbod.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))));

			if($user != null){

				// dd($request->all());

				// Log de nieuwe gebruiker in
				Auth::loginUsingId($user->id);

				// maak order_id
				$dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
				$order_id = $dag.'-'.$user->id;

				// Maak betaling aan Mollie klaar
				$gateway = Omnipay::gateway('Mollie');
				// $gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
				$response = $gateway->purchase(
					[
						'amount'=> $request->get('bedrag') * 1.21,
						'issuer'=> $request->get('issuer'),
						'description'=> $request->get('pakket_omschrijving'),
						'returnUrl'=> route('videocursus.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))),
						'notifyUrl'=> route('videocursus.webhook'),
						'paymentMethod'=> $request->get('paymentmethod'),
						'metadata'=>array('order_id'=>$order_id,'pakket_id'=>$request->get('pakket_id')),
					]
				)->send();

				if($response->isSuccessful()){
					// payment successful - update database
					return response()->json(['success' => false, 'errors'=>$response]);
				} elseif ($response->isRedirect()){
					// redirect to offsite payment gateway

					// Maak order die aan user zit
					$ref = $response->getTransactionReference();
					$order = new $order([
						'transaction_id'	=> $ref,
						'order_id'			=> $order_id,
						'user_id'			=> $user->id,
						'pakket_id'			=> $request->get('pakket_id'),
						'bedrag'			=> $request->get('bedrag') * 1.21,
						'betaalmethode'		=> $request->get('paymentmethod')
					]);

					$order->save();	

					$user->update([
						'voornaam'		=> $request->get('voornaam'),
						'achternaam'	=> $request->get('achternaam'),
						'role_id'		=> '4',
					]);

					$input = array(
						'CompanyName'	=> $request->get('bedrijfsnaam'),
						'Sex'			=> $request->get('aanhef'),
						'Initials'		=> $request->get('voornaam'),
						'SurName'		=> $request->get('achternaam'),
						'Address'		=> $request->get('adres'),
						'ZipCode'		=> $request->get('postcode'),
						'City'			=> $request->get('woonplaats'),
						'Country'		=> $request->get('land'),
						'EmailAddress'	=> $request->get('email'),
						'Mailings'		=> 'yes',
						'PhoneNumber'	=> $request->get('telefoonnummer'),
						'MobileNumber'	=> $request->get('mobielnummer'),
						'InvoiceSex'	=> '',
						'InvoiceMethod'	=> '0',
					);
					$this->createDebitor($input, $request->get('email'));	

					$bedrijfsgegevens = new $bedrijfsgegevens([
						'bedrijfsnaam'	=> $request->get('bedrijfsnaam'),
						'aanhef'		=> $request->get('aanhef'),
						'adres'			=> $request->get('adres'),
						'postcode'		=> $request->get('postcode'),
						'mobiel'		=> $request->get('mobielnummer'),
						'telefoonnummer'=> $request->get('telefoonnummer'),
						'woonplaats'	=> $request->get('woonplaats'),
						'land'			=> $request->get('land'),
						'user_id'		=> $user->id,
					]);
					$bedrijfsgegevens->save();

					return redirect($response->getRedirectUrl());
				} else {
					// display error message
					return response()->json(['success' => false, 'errors'=>$response->getMessage()]);
				}
			} else {
				return redirect()->back()->with(['message'=> 'Er is iets fout gegaan, neem a.u.b. contact op met jeroen@digitusmarketing.nl']);
			}
		// } else {
		// 	return view('webinars.ibora-telaat');
		// }
	}

	public function mollieWebhook(Order $order)
	{
		// Mollie webhook

		// pak datum van vandaag en volgende maand
		$vandaag = Carbon::now("Europe/Amsterdam");
		$volgende_maand = $vandaag->copy()->addMonth();

		// initialize Mollie gateway
		$mollie = Omnipay::gateway('Mollie');

		// Pak transactionReference uit Mollie ping
		$data = array();
		$data['id'] = $_POST['id'];
		// $data['pakket_id'] = $_GET['pakket_id'];


		// Pak order
		$order = $order->where('transaction_id','=',$data['id'])->first();

		// Pak bijbehorende user
		$user = $order->users;
		// Log::error($user);

		// maak betaling compleet
		$complete = Omnipay::gateway('Mollie')->completePurchase(['transactionReference'=>$data['id']])->send();
		// Log::error($complete);

		// Haal status van betaling op en bewerk
		$fetch = Omnipay::gateway('Mollie')->fetchTransaction(['transactionReference'=>$data['id']])->send();
		// Log::error($fetch);

		$pakket_id = $fetch->getMeta()['pakket_id'];
		// Log::error($pakket_id);


		if($fetch->isOpen()) {
			// Als bestelling nog open is

			////////////////////////////
			// Order status bijwerken //
			////////////////////////////
			$order->status = $fetch->getStatus();
			$order->save();

			////////////////////////////////////////////////////////////////////////////////////
			// Doe niks, wachten op een status verandering van open naar betaald of cancelled //
			////////////////////////////////////////////////////////////////////////////////////

		} elseif($fetch->isCancelled()) {
			// Als bestelling geannuleerd is.

			////////////////////////////
			// Order status bijwerken //
			////////////////////////////			
			$order->status = $fetch->getStatus();
			$order->save();

			// Misschien een email dat we het jammer vinden dat geen bestelling is geplaatst ?

			//////////////////////////////////////////////////////////////////
			// Verwijder de gebruiker zodat deze zich opnieuw kan aanmelden //
			//////////////////////////////////////////////////////////////////
			// $user->delete();
		} elseif($fetch->isPaid()) {
			// Als bestelling eindelijk betaald is.

			////////////////////////////
			// Order status bijwerken //
			////////////////////////////
			$order->betaling_datum = $vandaag;
			$order->status = $fetch->getStatus();
			$order->save();

			///////////////////////////////////////////////
			// Koppel TijdlijnActie cursus aan gebruiker //
			///////////////////////////////////////////////
			$user->cursussen()->attach('3');

			//////////////////////////////////////
			// Wefact proces in werking stellen //
			//////////////////////////////////////
			// Geef de gebruiker een random wachtwoord van 8 tekens
			$wachtwoord = str_random(8);


			$email = $user->email;
			if($pakket_id == '1'){
				$this->findDebitor(array('searchat'=>'EmailAddress','searchfor'=>$email));
				$user->update([
					'password'	=> bcrypt($wachtwoord),
					'plan_id'	=> '2',
				]);
			} elseif($pakket_id == '2') {
				$this->findDebitor2(array('searchat'=>'EmailAddress','searchfor'=>$email));
				$user->update([
					'password'	=> bcrypt($wachtwoord),
					'plan_id'	=> '4',
				]);
			}

			///////////////////////////////////////////////////////////
			// Email met account gegevens sturen naar nieuwe cursist //
			///////////////////////////////////////////////////////////

			// Gegevens opstellen voor email
			$data = array(
				'voornaam'		=> $user->voornaam,
				'achternaam'	=> $user->achternaam,
				'email'			=> $user->email,
				'wachtwoord'	=> $wachtwoord,
			);

			///////////////////////////////////////////////////
			// Stuur email naar emailadres met inloggegevens //
			///////////////////////////////////////////////////
			Mail::send('includes.email.newmember', 
				array('voornaam'=>$user->voornaam, 'achternaam'=>$user->achternaam, 'email'=>$user->email, 'wachtwoord'=>$wachtwoord), function($message) use ($data)
				{
					// $message->from('info@digitusmarketing.nl', 'Digitus Marketing');
					$message->to($data['email'], $data['voornaam']. ' '.$data['achternaam'])->subject('Jouw inloggegevens');
				});

			$complete;

		} elseif($fetch->isPaidOut()) {
			// Als bestelling is uit betaald.
			$order->betaling_datum = $vandaag;
			$order->status = $fetch->getStatus();
			$order->save();
			
			$complete;
		} elseif($fetch->isExpired()) {
			// Als bestelling is verlopen.
			////////////////////////////
			// Order status bijwerken //
			////////////////////////////			
			$order->status = $fetch->getStatus();
			$order->save();

			// Misschien een email dat we het jammer vinden dat geen bestelling is geplaatst ?

			//////////////////////////////////////////////////////////////////
			// Verwijder de gebruiker zodat deze zich opnieuw kan aanmelden //
			//////////////////////////////////////////////////////////////////
			// $user->delete();
		} else {
			$order->status = $fetch->getStatus();
			$order->save();
		}
	}

	public function createDebitor($input, $email){
		$newdebtor = new \Hyperized\Wefact\Debtor();
		$debtor = $newdebtor->add($input);
	}

	public function findDebitor($input){
		$finddebitor = new \Hyperized\Wefact\Debtor();
		$dedebtor = $finddebitor->list($input);
		$debtorcode = null;
		// dd($dedebtor);
		foreach($dedebtor as $debit){
			if(is_array($debit)){
				foreach($debit as $key => $value) {
					if(is_array($value)){
						foreach($value as $key => $val){
							if($key == 'DebtorCode') {
								// dd($val);
								$debtorcode = $val;
								// dd($debtorcode);
							}
						}
					}
				}
			}
		}
		// dd($debtorcode);
		$this->createInvoice($debtorcode);
	}
	public function findDebitor2($input){
		$finddebitor = new \Hyperized\Wefact\Debtor();
		$dedebtor = $finddebitor->list($input);
		$debtorcode = null;
		// dd($dedebtor);
		foreach($dedebtor as $debit){
			if(is_array($debit)){
				foreach($debit as $key => $value) {
					if(is_array($value)){
						foreach($value as $key => $val){
							if($key == 'DebtorCode') {
								// dd($val);
								$debtorcode = $val;
								// dd($debtorcode);
							}
						}
					}
				}
			}
		}
		// dd($debtorcode);
		$this->createInvoice2($debtorcode);
	}

	public function showDebitor($input){
		$invoice = new \Hyperized\Wefact\Debtor();
		$shows = $invoice->show($input);
		foreach($shows as $show){
			if(is_array($show)){
				foreach($show as $key => $value){
					if(is_array($value)){
						foreach($value as $key => $val){
							echo '&nbsp; &nbsp; &nbsp; -'.$key . ':' . $val . '<br>';	
						}
					} else {
						echo $key . ':' . $value . '<br>';
					}
				}
			}
		}
	}

	public function createInvoice($debtorcode){
		// Wanneer de gebruiker pakket nr 1 'basis' heeft gekocht
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> 'P0002',
				// 'DiscountPercentage' => 10,
				)
			)
		);
		// dd($invoiceParameters);
		$newinvoice->add($invoiceParameters);

		$this->showAllInvoices($debtorcode);
		// return $factuur;
	}
	public function createInvoice2($debtorcode){
		// Wanneer de gebruiker pakket nr 2 'geavanceerd' heeft gekocht
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> 'P0003',
				// 'DiscountPercentage' => 10,
				)
			)
		);
		// dd($invoiceParameters);
		$newinvoice->add($invoiceParameters);

		$this->showAllInvoices($debtorcode);
		// return $factuur;
	}

	public function showAllInvoices($debtorcode){
		// dd($debtorcode);
		$facturen = new \Hyperized\Wefact\Invoice();
		$factuurparameters = array(
			'searchat'=>'DebtorCode',
			'searchfor'=>$debtorcode,
		);
		// $factuurParameters = array('order'=>'ASC');
		// dd($factuurparameters);
		$alles = $facturen->list($factuurparameters);
		$factuuridentifier = null;
		foreach($alles as $factur){
			if(is_array($factur)){
				foreach($factur as $key => $value){
					if(is_array($value)){
						foreach($value as $key => $val){
							if($key == 'Identifier'){
								$factuuridentifier = $val;
							}
						}
					}
				}
			}
		}
		$this->sendInvoice($factuuridentifier);
	}

	public function showInvoice($input){
		$factuur = new \Hyperized\Wefact\Invoice();
		// $factuurParameter = array('Identifier'=>1);
		$defactuur = $factuur->show($input);
		return $defactuur;
	}

	public function sendInvoice($factuuridentifier){
		$factuur = new \Hyperized\Wefact\Invoice();
		$sendinvoiceparameters = array(
			'Identifier'=>$factuuridentifier
		);
		// $invoiceParameters = array('Identifier'=>1);
		$factuur->sendByEmail($sendinvoiceparameters);
		$this->markInvoiceAsPaid($factuuridentifier);


		
		// print_r($verstuur);
	}

	public function markInvoiceAsPaid($factuuridentifier)
	{
		$factuur = new \Hyperized\Wefact\Invoice();
		$invoiceparameters = array(
			'Identifier'=>$factuuridentifier
		);
		$factuur->markAsPaid($invoiceparameters);
	}

	public function showProducts($input){
		$product = new \Hyperized\Wefact\Product();
		$products = $product->list($input);
		foreach($products as $product){
			// var_dump($product);
			if(is_array($product)){
				foreach($product as $p){
					foreach($p as $key => $value) {
						echo $key . ':' . $value . "<Br>";
					}
					echo "<br>";
					// echo $p;
				}
			} 
		}
		// return $products;
	}

}