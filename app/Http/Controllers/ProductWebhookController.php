<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mail;
use Illuminate\Http\Request;
use App\Webinar;
use App\Attendee;
use App\Product;
use App\Order;
use App\Cursus;
use Omnipay;
use App\User;

class ProductWebhookController extends Controller {
	
	public function productWebhook(Order $order, User $u, Product $p, Cursus $c)
	{
		// Mollie webhook

		// pak datum van vandaag en volgende maand
		$vandaag = Carbon::now("Europe/Amsterdam");
		$volgende_maand = $vandaag->copy()->addMonth();

		// initialize Mollie gateway
		$gateway = Omnipay::gateway('Mollie');
		// $gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');

		// Pak transactionReference uit Mollie ping
		$data = array();
		$data['id'] = $_POST['id'];
		// $data['pakket_id'] = $_GET['pakket_id'];


		// Pak order
		$order = $order->where('transaction_id','=',$data['id'])->first();

		// Pak bijbehorende user
		$user = $u->where('id',$order->user_id)->first();

		// maak betaling compleet
		$complete = $gateway->completePurchase(['transactionReference'=>$data['id']])->send();

		// Haal status van betaling op en bewerk
		$fetch = $gateway->fetchTransaction(['transactionReference'=>$data['id']])->send();

		// ID's uit de meta pakken
		$product_id = $fetch->getMeta()['product_id'];
		$cursus_id = $fetch->getMeta()['cursus_id'];
		$plan_id = $fetch->getMeta()['plan_id'];

		$cursus = $c->where('id',$cursus_id)->first();

		// Het product pakken om het juiste wefact product id te pakken
		$product = $p->where('id', $product_id)->first();

		if($product->prijs_aanbieding_tot > $vandaag)
		{
			$wefact_id = $product->wefact_product_id_aanbieding;
		} elseif($product->prijs_herhaling_tot > $vandaag)
		{
			$wefact_id = $product->wefact_product_id_herhaling;
		} else {
			$wefact_id = $product->wefact_product_id_normaal;
		}


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
			if($user->cursussen->contains($cursus_id))
			{

			} else {
				$user->cursussen()->attach($cursus_id);
			}

			// //////////////////////////////////////
			// // Wefact proces in werking stellen //
			// //////////////////////////////////////
			// // Geef de gebruiker een random wachtwoord van 8 tekens

			if($user->password == '' || $user->password == ' ')
			{
				$wachtwoord = str_random(8);
				$user->update([
					'password'	=> bcrypt($wachtwoord),
					'plan_id'	=> $plan_id,
					'role_id'	=> '4',
				]);

				$data = array(
					'voornaam'		=> $user->voornaam,
					'achternaam'	=> $user->achternaam,
					'email'			=> $user->email,
					'wachtwoord'	=> $wachtwoord,
				);
				///////////////////////////////////////////////////
				// Stuur email naar emailadres met inloggegevens //
				///////////////////////////////////////////////////
				Mail::send('includes.email.newmember', $data, function($message) use ($data)
					{
					// $message->from('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing');
					$message->to($data['email'], $data['voornaam']. ' '.$data['achternaam'])->subject('Jouw inloggegevens');
				});
			} else {
				$wachtwoord = 'Je kunt je oude wachtwoord gebruiken.';

				$u_p_id = $user->plan_id;
				$p_id = $plan_id;

				if($u_p_id >= $p_id)
				{

				} else {
					$user->update([
						'plan_id'=>$plan_id,
					]);
				}


				$data = array(
					'voornaam'		=> $user->voornaam,
					'achternaam'	=> $user->achternaam,
					'email'			=> $user->email,
					'wachtwoord'	=> $wachtwoord,
					'cursusnaam'	=> $cursus->naam,
				);

				/////////////////////////////////////////////////////////////
				// Stuur email naar emailadres met notificatie van upgrade //
				/////////////////////////////////////////////////////////////
				Mail::send('includes.email.memberupgrade', $data, function($message) use ($data)
					{
					// $message->from('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing');
					$message->to($data['email'], $data['voornaam']. ' '.$data['achternaam'])->subject('Digitus account ge-upgrade!');
				});
			}

			$email = $user->email;
			$this->findDebitor(array('searchat'=>'EmailAddress','searchfor'=>$email), $wefact_id);

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

	public function findDebitor($input, $wefact_id){
		$finddebitor = new \Hyperized\Wefact\Debtor();
		$dedebtor = $finddebitor->list($input);
		$debtorcode = null;
		$wefact_id = $wefact_id;
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
		$this->createInvoice($debtorcode, $wefact_id);
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

	public function createInvoice($debtorcode, $wefact_id){
		// Wanneer de gebruiker pakket nr 1 'basis' heeft gekocht
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> $wefact_id,
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