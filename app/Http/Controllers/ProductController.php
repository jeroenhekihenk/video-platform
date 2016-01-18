<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mail;
use App\Webinar;
use App\Product;
use App\Cursus;
use App\Order;
use App\Module;
use App\User;
use App\Bedrijfsgegevens;
use App\Salespage;
use Auth;
use Hyperized\Wefact\WefactAPI as Wefact;
use Omnipay;
use App\Http\Requests\BestelProductRequest;

class ProductController extends Controller {

	public function getBestel($slug, Product $product)
	{
		$gateway = Omnipay::gateway('Mollie');
		// Please use only this API Key
		// Mollie knows it will be a test call
		$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
		$nu = $vandaag = Carbon::now("Europe/Amsterdam");

		$paymeth = $gateway->fetchPaymentMethods()->send();
		if($paymeth->isSuccessful()){
			$methods = $paymeth->getPaymentMethods();
		}
		$issuer = $gateway->fetchIssuers()->send();
		if($issuer->isSuccessful()){
			$issuers = $issuer->getIssuers();
		}
		$hetproduct = $product->where('slug',$slug)->first();
		return view('producten.bestel', compact('hetproduct', 'methods', 'issuers', 'nu'));
	}

	public function postBestel($slug, Order $order, User $u, BestelProductRequest $request, Bedrijfsgegevens $b, Product $p, Webinar $webinar)
	{
		// $webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum) {
		$product = $p->where('slug',$slug)->first();
		$user = $u->where('email', '=', $request->get('email'))->first();
		// $dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
		// $order_id = $dag.'-'.$user->id;
		// dd(route('webinar.aanbod.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))));
		// dd($product);
		if($user == null)
		{
			$user = new $u([
				'voornaam'		=> $request->get('voornaam'),
				'achternaam'	=> $request->get('achternaam'),
				'email'			=> $request->get('email'),
			]);
			$user->save();
		}
		if($user) {

			// Log de nieuwe gebruiker in
			Auth::loginUsingId($user->id);

			// maak order_id
			$dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
			$order_id = $dag.'-'.$user->id;

			// Maak betaling aan Mollie klaar
			$gateway = Omnipay::gateway('Mollie');
			// Please use only this API Key
			// Mollie knows it will be a test call
			$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
			$response = $gateway->purchase(
				[
					'amount'=> $request->get('bedrag') * 1.21,
					'issuer'=> $request->get('issuer'),
					'description'=> $request->get('omschrijving'),
					'returnUrl'=> route('bestel.bedankt', array('order_id='.$order_id)),
					'notifyUrl'=> route('product.webhook'),
					'paymentMethod'=> $request->get('paymentmethod'),
					'metadata'=>array('order_id'=>$order_id,'product_id'=>$product->id, 'cursus_id'=>$product->cursus_id, 'plan_id'=>$product->plan_id),
				]
			)->send();
			// dd($response);

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
					'cursus_id'			=> $product->cursus_id,
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

				if(count($user->bedrijfsgegevens))
				{
					$bedrijfsgegevens = $b->where('id',$user->bedrijfsgegevens->first()->id)->first();
					$bedrijfsgegevens->update([
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
				} else {
					$bedrijfsgegevens = new $b([
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
				}

				return redirect($response->getRedirectUrl());
			} else {
				// display error message
				return response()->json(['success' => false, 'errors'=>$response->getMessage()]);
			}
		} else {
			$gateway = Omnipay::gateway('Mollie');
			$nu = $vandaag = Carbon::now("Europe/Amsterdam");

			$paymeth = $gateway->fetchPaymentMethods()->send();
			if($paymeth->isSuccessful()){
				$methods = $paymeth->getPaymentMethods();
			}
			$issuer = $gateway->fetchIssuers()->send();
			if($issuer->isSuccessful()){
				$issuers = $issuer->getIssuers();
			}
			$hetproduct = $product->where('slug',$slug)->first();
			return view('producten.bestel', compact('hetproduct', 'methods', 'issuers', 'nu'))->with(['message'=> 'Er is iets fout gegaan, neem a.u.b. contact op met jeroen@digitusmarketing.nl']);
		}

	}

	public function getBestellen($slug, Product $product, Salespage $s, Module $m, Cursus $c)
	{
		$gateway = Omnipay::gateway('Mollie');
		// Please use only this API Key
		// Mollie knows it will be a test call
		$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
		$nu = $vandaag = Carbon::now("Europe/Amsterdam");

		$paymeth = $gateway->fetchPaymentMethods()->send();
		if($paymeth->isSuccessful()){
			$methods = $paymeth->getPaymentMethods();
		}
		$issuer = $gateway->fetchIssuers()->send();
		if($issuer->isSuccessful()){
			$issuers = $issuer->getIssuers();
		}
		$hetproduct = $product->where('slug',$slug)->first();
		$cursus = $c;
		return view('producten.bestellen', compact('hetproduct', 'methods', 'issuers', 'nu', 'cursus'));
	}

	public function postBestellen($slug, Order $order, User $u, BestelProductRequest $request, Bedrijfsgegevens $b, Product $p, Webinar $webinar)
	{
		// $webinardatum = Carbon::create(2015, 10, 24, '12', '00', '00', 'Europe/Amsterdam');
		// if(Carbon::now() > $webinardatum) {
		$product = $p->where('slug',$slug)->first();
		$user = $u->where('email', '=', $request->get('email'))->first();
		// $dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
		// $order_id = $dag.'-'.$user->id;
		// dd(route('webinar.aanbod.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))));
		// dd($product);
		if($user == null)
		{
			$user = new $u([
				'voornaam'		=> $request->get('voornaam'),
				'achternaam'	=> $request->get('achternaam'),
				'email'			=> $request->get('email'),
			]);
			$user->save();
		}
		if($user) {

			// Log de nieuwe gebruiker in
			Auth::loginUsingId($user->id);

			// maak order_id
			$dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
			$order_id = $dag.'-'.$user->id;

			// Maak betaling aan Mollie klaar
			$gateway = Omnipay::gateway('Mollie');
			// Please use only this API Key
			// Mollie knows it will be a test call
			$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
			$response = $gateway->purchase(
				[
					'amount'=> $request->get('bedrag') * 1.21,
					'issuer'=> $request->get('issuer'),
					'description'=> $request->get('omschrijving'),
					'returnUrl'=> route('bestel.bedankt', array('order_id='.$order_id)),
					'notifyUrl'=> route('product.webhook'),
					'paymentMethod'=> $request->get('paymentmethod'),
					'metadata'=>array('order_id'=>$order_id,'product_id'=>$product->id, 'cursus_id'=>$product->cursus_id, 'plan_id'=>$product->plan_id),
				]
			)->send();
			// dd($response);

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
					'cursus_id'			=> $product->cursus_id,
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

				if(count($user->bedrijfsgegevens))
				{
					$bedrijfsgegevens = $b->where('id',$user->bedrijfsgegevens->first()->id)->first();
					$bedrijfsgegevens->update([
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
				} else {
					$bedrijfsgegevens = new $b([
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
				}


				return redirect($response->getRedirectUrl());
			} else {
				// display error message
				return response()->json(['success' => false, 'errors'=>$response->getMessage()]);
			}
		} else {
			$gateway = Omnipay::gateway('Mollie');
			// Please use only this API Key
			// Mollie knows it will be a test call
			$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
			$nu = $vandaag = Carbon::now("Europe/Amsterdam");

			$paymeth = $gateway->fetchPaymentMethods()->send();
			if($paymeth->isSuccessful()){
				$methods = $paymeth->getPaymentMethods();
			}
			$issuer = $gateway->fetchIssuers()->send();
			if($issuer->isSuccessful()){
				$issuers = $issuer->getIssuers();
			}
			$hetproduct = $product->where('slug',$slug)->first();
			$cursus = $c;
			return view('producten.bestellen', compact('hetproduct', 'methods', 'issuers', 'nu', 'cursus'))->with(['message'=> 'Er is iets fout gegaan, neem a.u.b. contact op met jeroen@digitusmarketing.nl']);
		}

	}

		public function getBestelBedankt(Order $o, Product $p)
	{
		$order_id = $_GET['order_id'];
		$order = $o->where('order_id','=',$order_id)->first();
		
		$ref = $order->transaction_id;

		$gateway = Omnipay::gateway('Mollie');
		// Please use only this API Key
		// Mollie knows it will be a test call
		$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');

		$send = $gateway->completePurchase(['transactionReference'=>$ref])->send();

		$fetch = $gateway->fetchTransaction(['transactionReference'=>$ref])->send();

		$product_id = $fetch->getMeta()['product_id'];
		$product = $p->where('id',$product_id)->first();

		$nu = Carbon::now('Europe/Amsterdam');


		if($send->isSuccessful()) {

			$sitetitel = 'Bedankt voor je bestelling!';
			$titel = 'Betaling succesvol ontvangen!';
			$message = 'We hebben je betaling succesvol ontvangen! Bekijk je inbox, we hebben je account gegevens toegestuurd! Je kan gelijk aan de slag met de cursus '.$product->naam;
			$icon = '<span class="fa fa-check-circle" style="color:green;font-size:17em;"></span>';

			// Wanneer de betaling succesvol is, laat bedankpagina zien
			return view('producten.bedankt', compact('product', 'titel', 'message', 'icon', 'nu', 'sitetitel'));

		} else {

			if($fetch->getStatus() == 'open'){

				$order->status = $fetch->getStatus();
				$order->save();

				$sitetitel = 'Even wachten..';
				$titel = 'We moeten nog even wachten..';
				$message = 'We zijn je betaling nog aan het verwerken! Zodra we jouw betaling hebben ontvangen, ontvang je een email van ons met verdere instructies.';
				$icon = '<span class="fa fa-clock-o" style="color:#2daae1;font-size:17em;"></span>';

				return view('producten.bedankt', compact('product', 'titel', 'message', 'icon', 'sitetitel'));
			
			} if($fetch->getStatus() == 'cancelled') {
				$order->status = $fetch->getStatus();
				$order->save();

				$sitetitel = 'Bestelling geannuleerd';
				$titel = 'Je hebt je bestelling geannuleerd.';
				$message = 'Graag zouden wij willen weten wat de reden is voor het annuleren van je bestelling. <a href="mailto:jeroen@digitusmarketing.nl?subject=Reden annulering">Klik hier</a> om ons een bericht te sturen.';
				$icon = '<span class="fa fa-times-circle" style="color:red;font-size:17em;"></span>';

				return view('producten.bedankt', compact('product', 'titel', 'message', 'icon', 'sitetitel'));
			} else {

				$order->status = $fetch->getStatus();
				$order->save();

				$sitetitel = 'Oh oh...';
				$titel = 'Oh oh...';
				$message = 'Het lijkt er op dat er wat mis is gegaan. Neem a.u.b. <a href="mailto:jeroen@digitusmarketing.nl" target="_blank" title="Neem contact op met Jeroen">contact met ons op</a> en geef de volgende data mee:<br><ul><li>Referentie: '. $ref. '</li><li>Status: '.$fetch->getStatus(). '</li><li>Order id: '. $order_id . '</li></ul>';
				$icon = '<span class="fa fa-question-circle" style="color:orange;font-size:17em;"></span>';

				return view('producten.bedankt', compact('product', 'titel', 'message', 'icon', 'sitetitel'));
				
			}

		}
	}

	public function createDebitor($input, $email){
		$newdebtor = new \Hyperized\Wefact\Debtor();
		$debtor = $newdebtor->add($input);
	}

}