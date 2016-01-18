<?php namespace App\Http\Controllers\Webinar;

use Auth;
use App\Http\Controllers\Controller;
use App\Attendee;
use App\User;
use App\Order;
use App\Bedrijfsgegevens;
use App\Http\Requests\Webinars\Superboost\AanmeldRequest;
use App\Http\Requests\Webinars\Superboost\LoginRequest;
use App\Http\Requests\Webinars\Superboost\AanbodRequest;
use Mail;
use Carbon\Carbon;
use Hyperized\Wefact\WefactAPI as Wefact;
use Omnipay;
use Log;

class SuperboostController extends Controller {

	public function getAanmeld()
	{
		$webinardatum = Carbon::create(2015, 11, 18, '23', '00', '00', 'Europe/Amsterdam');
		if(Carbon::now() > $webinardatum) {
			return redirect('/');
		} else {
			return view('webinars.superboost.aanmeld');
		}
	}

	public function postAanmeld(AanmeldRequest $request, Attendee $attendee)
	{
		$webinardatum = Carbon::create(2015, 11, 18, '23', '00', '00', 'Europe/Amsterdam');
		if(Carbon::now() > $webinardatum) {
			return redirect('/');
		} else {
			$deattendee = $attendee->where('email', $request->get('email'))->first();
			if($deattendee == null)
			{
				// Post gegevens naar Mailchimp <-- gebeurd in ajax
				// Post gegevens naar website en maak gebruiker aan aan de hand van email adres
				$data = array(
					'email'			=> $request->get('email'),
					'voornaam'		=> $request->get('voornaam'),
					'achternaam'	=> $request->get('achternaam'),
				);

				// $newuser = new $user([
				// 	'voornaam'		=> $request->get('voornaam'),
				// 	'achternaam'	=> $request->get('achternaam'),
				// 	'email'			=> $request->get('email'),
				// 	'role_id'		=> '4',
				// ]);

				$newattendee = new $attendee([
					'voornaam'		=> $request->get('voornaam'),
					'achternaam'	=> $request->get('achternaam'),
					'email'			=> $request->get('email'),
					'ref'			=> $request->get('ref'),
				]);

				$newattendee->save();
			} else {

				$data = array(
					'email'			=> $deattendee->email,
					'voornaam'		=> $deattendee->voornaam,
					'achternaam'	=> $deattendee->achternaam,
				);

				$deattendee->update([
					'voornaam'		=> $request->get('voornaam'),
					'achternaam'	=> $request->get('achternaam'),
					'email'			=> $request->get('email'),
					'ref'			=> $request->get('ref'),
				]);

				$deattendee->save();

			}

			// Verstuur mail dat aanmelding succesvol is
			// Mail::send('includes.email.webinars.superboost', $data, function($message) use($data)
			// {
			// 	$message->from('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing');
			// 	$message->to($data['email'], $data['voornaam']. ' ' .$data['achternaam'])
			// 		->subject('Aanmelding succesvol!');
			// });

			// print_r($data['email']);

			// Verstuur kopie naar Digitus
			Mail::send('includes.email.webinars.superboost', $data, function($message) use($data)
			{
				$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
				$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
					->subject($data['voornaam']. ' ' .$data['achternaam']. ' heeft zich zojuist aangemeld voor het Superboost je bereik Webinar');
			});
		}
	}

	public function getAanmeldBedankt()
	{
		return view('webinars.superboost.aanmeldbedankt');
	}

	public function getLogin()
	{
		// Pagina waar wordt gecheckt of het opgegeven emailadres voorkomt in de tabel 'attendees'
		// dd(str_random(4));
		$webinardatum = Carbon::create(2015, 11, 18, '19', '15', '00', 'Europe/Amsterdam');
		if(Carbon::now() < $webinardatum)
		{
			return view('webinars.superboost.tevroeg');
		} else {
			return view('webinars.superboost.login');
		}
	}

	public function postLogin(LoginRequest $request, Attendee $attendee)
	{
		// Pagina waar wordt gecheckt of het opgegeven emailadres voorkomt in de tabel 'attendees'
		$deattendee = $attendee->where('email', $request->get('email'))->first();
		if($deattendee == null)
		{
			$newattendee = new $attendee([
				'email'			=> $request->get('email'),
				'ref'			=> $request->get('ref'),
			]);

			$newattendee->save();

			$data = [
			'voornaam'		=> null,
			'achternaam'	=> null,
			'email'			=> $request->get('email'),
			];

			// Verstuur kopie naar Digitus
			Mail::send('includes.email.webinars.superboost', $data, function($message) use($data)
			{
				$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
				$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
					->subject('Iemand heeft zich zojuist aangemeld voor het Superboost je bereik Webinar');
			});

			// Doe iets omdat $deattendee niet bestaat
			return redirect()->back()->with(['message'=>'Het lijkt er op dat je je niet hebt aangemeld voor dit online event. We hebben je ingeschreven, je kunt je nu aanmelden voor dit online event! Probeer het nogmaals :)']);
			// dd($deattendee);
		} else {
			// Doe iets omdat $deattendee bestaat
			\Session::put('deattendee', $deattendee);
			return redirect('/superboost/onlineevent')->with(['message'=>'Succes']);
			// dd($deattendee);
		}
	}

	public function testWebinar()
	{
		return view('webinars.superboost.event')->with(['message'=>'Welkom bij ons online event!']);
	}

	public function getOnlineEvent()
	{
		if(\Session::has('deattendee'))
		{
			$attendee = \Session::get('deattendee');
		} else {
			$attendee = null;
		}
		
		if($attendee === null) {
			return redirect('superboost/live')->with(['message'=>'Je moet je eerst aanmelden voordat je dit exclusieve online event mag bekijken!']);
		} else {
			return view('webinars.superboost.event', compact('attendee'))->with(['message'=>'Welkom bij ons online event!']);
		}
	}

	public function getWebinar()
	{
		// $webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		// $voorwebinardatum = Carbon::create(2015,10,25, '23', '59', '59', 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum && Carbon::now() < $voorwebinardatum) {
		// 	// Laat login / aanmeld pagina zien
		// 	return view('webinars.ibora-aanmelden');
		// } else {
		// 	return view('webinars.ibora-telaat');
		// }
	}

	public function postWebinar(IboraLoginRequest $request, User $user)
	{
		// $webinardatum = Carbon::createFromDate(2015, 10, 21, 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum) {
		// 	return view('webinars.ibora-telaat');
		// } else {

			// 'Log' de gebruiker in aan de hand van email adres
			// Om er zeker van te zijn dat deze zich heeft aangemeld
		// if($request->has('email')){
		// 	$webinaruser = $user->where('email',$request->get('email'))->first();
		// } else {
		// 	$webinaruser = null;
		// }


		// if($webinaruser != null){
		// 	Auth::loginUsingId($webinaruser->id);
		// 	$webinaruser->last_login = Carbon::now('Europe/Amsterdam');
		// 	$webinaruser->save();
		// 	return redirect('VPNO/webinar-herhaling')->with(['message'=>'Succesvol aangemeld!']);
		// } else {
		// 	$webinaruser = new $user([
		// 		'email'			=> $request->get('email'),
		// 		'role_id'		=> '4',
		// 	]);

		// 	$webinaruser->save();
		// 	return redirect('VPNO/webinar')->with(['message'=>'Het opgegeven emailadres was niet bekend bij ons. Je kunt nu inloggen met je emailadres.']);
		// }

			// if(Auth::user()){
			// } else {
			// 	return redirect($this->getWebinar())->with(['message'=>'Het lijkt er op dat je je niet hebt aangemeld voor dit webinar. Neem a.u.b. contact op.']);	
			// }
		// }
	}

	public function hetWebinar(User $user)
	{
		// $webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		// $voorwebinardatum = Carbon::create(2015,10,25, '23', '59', '59', 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum && Carbon::now() < $voorwebinardatum) {
		// 	return view('webinars.ibora-telaat');
		// } else {
		// 	// Laat webinar iframe en tlk.io zien
		// 	if(Auth::user()){
		// 		return view('webinars.iborawebinar');
		// 	} else {
		// 		$newuser = new $user([
		// 			'email'			=> $request->get('email'),
		// 			'role_id'		=> '4',
		// 		]);

		// 		$newuser->save();
		// 		return redirect('VPNO/webinar')->with(['message'=>'We hebben een account voor je aangemaakt, je kunt nu inloggen om het webinar te bekijken.']);
		// 	}
		// }
	}

	public function testenwebinar()
	{
		// return view('webinars.iborawebinar');
	}

	public function getHetAanbod()
	{
		$webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		if(Carbon::now() > $webinardatum) {
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

			return view('webinars.iborawebinaraanbod', compact('methods', 'issuers'));

		} else {
			return view('webinars.ibora-telaat');
		}

	}
	public function getHetAanbod2()
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
			// if(Auth::user()){
				return view('webinars.iborawebinaraanbod', compact('methods', 'issuers'));
			// } else {
				// return redirect('VPNO/webinar')->with(['message'=>'Het lijkt er op dat er iets mis is gegaan, probeer het a.u.b. opnieuw.']);
			// }
			
	}

	public function postHetAanbod(Order $order, User $usr, AanbodRequest $request, Bedrijfsgegevens $bedrijfsgegevens)
	{
		// $webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum) {
			$user = $usr->where('email', '=', $request->get('email'))->first();
			// $dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
			// $order_id = $dag.'-'.$user->id;
			// dd(route('webinar.aanbod.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))));

			if($user){

				// Log de nieuwe gebruiker in
				Auth::loginUsingId($user->id);

				// maak order_id
				$dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
				$order_id = $dag.'-'.$user->id;

				// Maak betaling aan Mollie klaar
				$gateway = Omnipay::gateway('Mollie');
				$response = $gateway->purchase(
					[
						'amount'=> $request->get('bedrag') * 1.21,
						'issuer'=> $request->get('issuer'),
						'description'=> $request->get('pakket_omschrijving'),
						'returnUrl'=> route('webinar.aanbod.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))),
						'notifyUrl'=> route('webinar.aanbod.webhook'),
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

	public function getBedanktAanbod(Order $order)
	{
		$webinardatum = Carbon::create(2015, 10, 23, '12', '00', '00', 'Europe/Amsterdam');
		// print_r($webinardatum.'+' .Carbon::now());
		if(Carbon::now() > $webinardatum) {
			// return pagina
			$vandaag = Carbon::now("Europe/Amsterdam");

			if(Auth::check())
			{
				$user = Auth::user();
			} else {
				$user = null;
			}
			$order_id = $_GET['order_id'];
			$order = $order->where('order_id','=',$order_id)->first();
			
			$ref = $order->transaction_id;

			$send = Omnipay::gateway('Mollie')->completePurchase(['transactionReference'=>$ref])->send();

			$fetch = Omnipay::gateway('Mollie')->fetchTransaction(['transactionReference'=>$ref])->send();


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

					return redirect()->action('TijdlijnActie\TijdlijnActieController@index')
						->with(['message'=>'We zijn je betaling nog aan het verwerken! Zodra we jouw betaling hebben ontvangen, ontvang je een email van ons met verdere instructies.']);
				
				} else {
					$order->status = $fetch->getStatus();
					$order->save();

					return redirect()->action('TijdlijnActie\TijdlijnActieController@index')
						->with(['message'=>'Het lijkt er op dat er wat mis is gegaan. Neem a.u.b. <a href="mailto:jeroen@digitusmarketing.nl" target="_blank" title="Neem contact op met Jeroen">contact met ons op</a> en geef de volgende data mee:<br><ul><li>Referentie: '. $ref. '</li><li>Status: '.$fetch->getStatus(). '</li><li>Order id: '. $order_id . '</li></ul>']);
					
				}

			}
		} else {
			return view('webinars.ibora-telaat');
		}
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

		// maak betaling compleet
		$complete = Omnipay::gateway('Mollie')->completePurchase(['transactionReference'=>$data['id']])->send();

		// Haal status van betaling op en bewerk
		$fetch = Omnipay::gateway('Mollie')->fetchTransaction(['transactionReference'=>$data['id']])->send();

		$pakket_id = $fetch->getMeta()['pakket_id'];


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
			} elseif($pakket_id == '4') {
				$this->findDebitor3(array('searchat'=>'EmailAddress','searchfor'=>$email));
				$user->update([
					'password'	=> bcrypt($wachtwoord),
					'plan_id'	=> '4',
				]);
			} elseif($pakket_id == '5') {
				$this->findDebitor4(array('searchat'=>'EmailAddress','searchfor'=>$email));
				$user->update([
					'password'	=> bcrypt($wachtwoord),
					'plan_id'	=> '4',
				]);
			} elseif($pakket_id == '6') {
				$this->findDebitor5(array('searchat'=>'EmailAddress','searchfor'=>$email));
				$user->update([
					'plan_id'	=> '4',
				]);
			}

			///////////////////////////////////////////////////////////
			// Email met account gegevens sturen naar nieuwe cursist //
			///////////////////////////////////////////////////////////
			
			if($pakket_id == '6') {

			} else {

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

			}

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
	public function findDebitor3($input){
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
		$this->createInvoice3($debtorcode);
	}
	public function findDebitor4($input){
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
		$this->createInvoice4($debtorcode);
	}
	public function findDebitor5($input){
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
		$this->createInvoice5($debtorcode);
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
				'ProductCode'	=> 'P0022',
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
				'ProductCode'	=> 'P0023',
				// 'DiscountPercentage' => 10,
				)
			)
		);
		// dd($invoiceParameters);
		$newinvoice->add($invoiceParameters);

		$this->showAllInvoices($debtorcode);
		// return $factuur;
	}
	public function createInvoice3($debtorcode){
		// Wanneer de gebruiker het vip coaching pakket in 2 termijnen heeft gekocht
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> 'P0026',
				// 'DiscountPercentage' => 10,
				)
			)
		);
		// dd($invoiceParameters);
		$newinvoice->add($invoiceParameters);

		$this->showAllInvoices($debtorcode);
		// return $factuur;
	}
	public function createInvoice4($debtorcode){
		// Wanneer de gebruiker het vip coaching pakket in 1 termijn heeft gekocht
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> 'P0025',
				// 'DiscountPercentage' => 10,
				)
			)
		);
		// dd($invoiceParameters);
		$newinvoice->add($invoiceParameters);

		$this->showAllInvoices($debtorcode);
		// return $factuur;
	}
	public function createInvoice5($debtorcode){
		// Wanneer de gebruiker het upgrade pakket heeft gekocht
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> 'P0024',
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