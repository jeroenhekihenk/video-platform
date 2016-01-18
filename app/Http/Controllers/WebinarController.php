<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\Webinars\Superboost\AanmeldRequest;
use App\Http\Requests\Webinars\Superboost\LoginRequest;
use App\Webinar;
use App\Webinarherhaling;
use App\Attendee;
use App\Product;
use App\Caseklant;
use App\Zaak;
use App\Order;
use App\User;
use App\Bedrijfsgegevens;
use App\Salespage;
use Auth;
use Hyperized\Wefact\WefactAPI as Wefact;
use Omnipay;

class WebinarController extends Controller {

	public function webinar(Webinar $webinar)
	{	
		$webinars = $webinar->all();
		return view('testomgeving.webinar.index', compact('webinars'));
	}

	public function getAanmelden($slug, Webinar $webinar, User $u)
	{
		$hetwebinar = $webinar->where('slug',$slug)->first();
		if(isset($hetwebinar))
		{		
			$webinardatum = $hetwebinar->webinar_start_tijd;
			$webinareind = $hetwebinar->webinar_eind_tijd;

			$host1 = $u->where('id', $hetwebinar->host1_u_id)->first();
			$host2 = $u->where('id', $hetwebinar->host2_u_id)->first();
			$hosts = array("1"=>$host1, "2"=>$host2);
			// $hosts = array_push($hosts, $host1, $host2);


			\Session::forget('deattendee');
			if(Carbon::now() > $webinareind) {
				return view('webinars.telaat', compact('hetwebinar', 'hosts'));
			} else {
				return view('webinars.aanmelden', compact('hetwebinar', 'hosts'));
			}
		} else {
			return redirect('/');
		}
	}

	public function postAanmelden($slug, Webinar $webinar, AanmeldRequest $request, Attendee $attendee)
	{
		$hetwebinar = $webinar->where('slug',$slug)->first();
		
		$deattendee = $attendee->where('email', $request->get('email'))->first();
		if($deattendee == null)
		{
			// Post gegevens naar Mailchimp <-- gebeurd in ajax
			// Post gegevens naar website en maak gebruiker aan aan de hand van email adres
			$data = array(
				'email'			=> $request->get('email'),
				'voornaam'		=> $request->get('voornaam'),
				'achternaam'	=> $request->get('achternaam'),
				'webinartitel'	=> $hetwebinar->titel,
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

			if($newattendee->webinars->contains($hetwebinar->id))
			{

			} else {				
				$newattendee->webinars()->attach($hetwebinar->id);
			}
		} else {

			$data = array(
				'email'			=> $deattendee->email,
				'voornaam'		=> $deattendee->voornaam,
				'achternaam'	=> $deattendee->achternaam,
				'webinartitel'	=> $hetwebinar->titel,
			);

			$deattendee->update([
				'voornaam'		=> $request->get('voornaam'),
				'achternaam'	=> $request->get('achternaam'),
				'email'			=> $request->get('email'),
				'ref'			=> $request->get('ref'),
			]);

			$deattendee->save();

			if($deattendee->webinars->contains($hetwebinar->id))
			{

			} else {				
				$deattendee->webinars()->attach($hetwebinar->id);
			}

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
		Mail::send('includes.email.webinars.aanmeld', $data, function($message) use($data)
		{
			$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
			$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
				->subject($data['voornaam']. ' ' .$data['achternaam']. ' heeft zich zojuist aangemeld voor het '. $data['webinartitel']. ' Webinar');
		});
	}

	public function getAanmeldBedankt($slug, Webinar $webinar)
	{
		$hetwebinar = $webinar->where('slug',$slug)->first();
		return view('webinars.aanmeldbedankt', compact('hetwebinar'));
	}

	public function getLogin($slug, Webinar $webinar, Attendee $attendee)
	{
		$hetwebinar = $webinar->where('slug',$slug)->first();
		if(isset($hetwebinar))
		{
			$webinardatum = $hetwebinar->webinar_start_tijd;
			$webinareind = $hetwebinar->webinar_eind_tijd;

			\Session::forget('deattendee');

			if(Carbon::now() < $webinardatum) {
				return view('webinars.tevroeg', compact('hetwebinar'));
			} elseif(Carbon::now() > $webinareind) {
				return view('webinars.telaat', compact('hetwebinar'));
			} else {
				return view('webinars.login', compact('hetwebinar'));
			}
		} else {
			return redirect('/');
		}
	}

	public function postLogin($slug, Webinar $webinar, Attendee $attendee, LoginRequest $request)
	{
		$hetwebinar = $webinar->where('slug',$slug)->first();
		// Pagina waar wordt gecheckt of het opgegeven emailadres voorkomt in de tabel 'attendees'
		$deattendee = $attendee->where('email', $request->get('email'))->first();
		if($deattendee == null)
		{
			$newattendee = new $attendee([
				'email'			=> $request->get('email'),
				'ref'			=> $request->get('ref'),
			]);

			$newattendee->save();

			$newattendee->webinars()->attach($hetwebinar->id);

			$data = [
			'voornaam'		=> null,
			'achternaam'	=> null,
			'email'			=> $request->get('email'),
			'webinartitel'	=> $hetwebinar->titel,
			];

			// Verstuur kopie naar Digitus
			Mail::send('includes.email.webinars.aanmeld', $data, function($message) use($data)
			{
				$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
				$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
					->subject('Iemand heeft zich zojuist aangemeld voor het '. $data['webinartitel'] .' Webinar');
			});

			// Doe iets omdat $deattendee niet bestaat
			return redirect()->back()->with(['message'=>'Het lijkt er op dat je je niet hebt aangemeld voor dit online event. We hebben je ingeschreven, je kunt je nu aanmelden voor dit online event! Probeer het nogmaals :)']);
			// dd($deattendee);
		} else {
			// Doe iets omdat $deattendee bestaat
			if($deattendee->webinars->contains($hetwebinar->id))
			{
				\Session::put('deattendee', $deattendee);
				return redirect()->action('WebinarController@getWebinar', array($hetwebinar->slug))->with(['message'=>'Succes']);
			} else {
				$deattendee->webinars()->attach($hetwebinar->id);
				return redirect()->back()->with(['message'=>'Het lijkt er op dat er iets mis is gegaan.. Probeer het opnieuw']);
			}
		}
	}

	public function getWebinar($slug, Webinar $webinar, Product $product, Attendee $attendee)
	{
		$hetwebinar = $webinar->where('slug',$slug)->first();

		if(\Session::has('deattendee'))
		{
			$attendee = \Session::get('deattendee');
		} else {
			$attendee = null;
		}
		
		if($attendee === null) {
			return redirect()->action('WebinarController@getLogin', array($slug))->with(['message'=>'Je moet je eerst aanmelden voordat je dit webinar mag bekijken!']);
		} else {
			return view('webinars.webinar', compact('hetwebinar'))->with(['message'=>'Welkom bij ons webinar!']);
		}
	}

	public function getHerhalingLogin($slug, Webinar $w, Webinarherhaling $wh, Attendee $a)
	{
		$webinar = $w->where('slug',$slug)->first();
		$hetwebinar = $webinar->webinarherhaling->first();

		$webinardatum = $hetwebinar->herhaling_start_tijd;
		$webinareind = $hetwebinar->herhaling_eind_tijd;

		\Session::forget('deattendee');

		if(Carbon::now() < $webinardatum) {
			return view('webinars.tevroeg', compact('hetwebinar'));
		} elseif(Carbon::now() > $webinareind) {
			return view('webinars.telaat', compact('hetwebinar'));
		} else {
			return view('webinars.herhalinglogin', compact('hetwebinar'));
		}
	}

	public function postHerhalingLogin($slug, Webinar $w, Webinarherhaling $wh, Attendee $a, LoginRequest $request)
	{
		$webinar = $w->where('slug',$slug)->first();
		$hetwebinar = $webinar->webinarherhaling->first();
		// Pagina waar wordt gecheckt of het opgegeven emailadres voorkomt in de tabel 'attendees'
		$deattendee = $a->where('email', $request->get('email'))->first();
		if($deattendee == null)
		{
			$newattendee = new $a([
				'email'			=> $request->get('email'),
				'ref'			=> $request->get('ref'),
			]);

			$newattendee->save();

			$newattendee->webinars()->attach($hetwebinar->webinars->first()->id);

			$data = [
			'voornaam'		=> null,
			'achternaam'	=> null,
			'email'			=> $request->get('email'),
			'webinartitel'	=> $hetwebinar->webinars->first()->titel,
			];

			// Verstuur kopie naar Digitus
			Mail::send('includes.email.webinars.aanmeld', $data, function($message) use($data)
			{
				$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
				$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
					->subject('Iemand heeft zich zojuist aangemeld voor het '. $data['webinartitel'] .' Webinar');
			});

			// Doe iets omdat $deattendee niet bestaat
			return redirect()->back()->with(['message'=>'Het lijkt er op dat je je niet hebt aangemeld voor dit online event. We hebben je ingeschreven, je kunt je nu aanmelden voor dit online event! Probeer het nogmaals :)']);
			// dd($deattendee);
		} else {
			// Doe iets omdat $deattendee bestaat
			if($deattendee->webinars->contains($hetwebinar->webinars->first()->id))
			{
				$deattendee->update(['ref'=>$request->get('ref')]);
				\Session::put('deattendee', $deattendee);
				return redirect()->action('WebinarController@getHerhaling', array($hetwebinar->webinars->first()->slug))->with(['message'=>'Succes']);
			} else {
				$deattendee->update(['ref'=>$request->get('ref')]);
				$deattendee->webinars()->attach($hetwebinar->webinars->first()->id);
				return redirect()->back()->with(['message'=>'Het lijkt er op dat er iets mis is gegaan.. Probeer het opnieuw']);
			}
		}
	}

	public function getHerhaling($slug, Webinar $w, Webinarherhaling $wh, Attendee $a)
	{
		$webinar = $w->where('slug',$slug)->first();
		$hetwebinar = $webinar->webinarherhaling->first();

		$webinardatum = $hetwebinar->herhaling_start_tijd;
		$webinareind = $hetwebinar->herhaling_eind_tijd;

		if(\Session::has('deattendee'))
		{
			$attendee = \Session::get('deattendee');
		} else {
			$attendee = null;
		}
		
		if($attendee === null) {
			return redirect()->action('WebinarController@getHerhalingLogin', array($hetwebinar->webinars->first()->slug))->with(['message'=>'Je moet je eerst aanmelden voordat je dit webinar mag bekijken!']);
		} else {
			return view('webinars.herhaling', compact('hetwebinar'))->with(['message'=>'Welkom bij ons webinar!']);
		}
	}

	public function getBestel($slug, Product $product)
	{
		$gateway = Omnipay::gateway('Mollie');
		$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
		// $gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
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
		return view('testomgeving.webinar.bestel', compact('hetproduct', 'methods', 'issuers', 'nu'));
	}

	public function postBestel($slug, Order $order, User $u, Request $request, Bedrijfsgegevens $bedrijfsgegevens, Product $p, Webinar $webinar)
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
			$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
			$response = $gateway->purchase(
				[
					'amount'=> $request->get('bedrag') * 1.21,
					'issuer'=> $request->get('issuer'),
					'description'=> $request->get('omschrijving'),
					'returnUrl'=> route('test.bestel.bedankt', array('order_id='.$order_id)),
					'notifyUrl'=> route('test.webhook'),
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
			$webinars = $webinar->all();
			return view('testomgeving.webinar.index', compact('webinars'))->with(['message'=> 'Er is iets fout gegaan, neem a.u.b. contact op met jeroen@digitusmarketing.nl']);
		}

	}

	public function getBestelBedankt(Order $o)
	{
		$order_id = $_GET['order_id'];
		$order = $o->where('order_id','=',$order_id)->first();
		
		$ref = $order->transaction_id;

		$gateway = Omnipay::gateway('Mollie');
		$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');

		$send = $gateway->completePurchase(['transactionReference'=>$ref])->send();

		$fetch = $gateway->fetchTransaction(['transactionReference'=>$ref])->send();


		if($send->isSuccessful()) {

			
			// Wanneer de betaling succesvol is, laat bedankpagina zien
			// return redirect()->action('Member\MemberAuthController@getLogin')
			// 	->with(['message'=>'Bekijk je inbox, we hebben je account gegevens toegestuurd!']);
			return "success!";

		} else {

			if($fetch->getStatus() == 'open'){

				// $order->status = $fetch->getStatus();
				// $order->save();

				// return redirect()->action('TestOmgeving\TestOmgevingController@getAdviesGesprekBedankt')
				// 	->with(['message'=>'We zijn je betaling nog aan het verwerken! Zodra we jouw betaling hebben ontvangen, ontvang je een email van ons met verdere instructies.']);
				return "open";
			
			} else {
				// $order->status = $fetch->getStatus();
				// $order->save();

				// return redirect()->action('TestOmgeving\TestOmgevingController@getAdviesGesprekBedankt')
				// 	->with(['message'=>'Het lijkt er op dat er wat mis is gegaan. Neem a.u.b. <a href="mailto:jeroen@digitusmarketing.nl" target="_blank" title="Neem contact op met Jeroen">contact met ons op</a> en geef de volgende data mee:<br><ul><li>Referentie: '. $ref. '</li><li>Status: '.$fetch->getStatus(). '</li><li>Order id: '. $order_id . '</li></ul>']);
				return "onbekend";
				
			}

		}
	}

	public function getBestellen($slug, Product $product, Salespage $s)
	{
		$gateway = Omnipay::gateway('Mollie');
		$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
		// $gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
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
		$salespage = $hetproduct->salespage->first();
		$salespage_producten = $salespage->producten;
		return view('testomgeving.webinar.bestellen', compact('hetproduct', 'methods', 'issuers', 'nu', 'salespage_producten'));
	}

	public function postBestellen($slug, Order $order, User $u, Request $request, Bedrijfsgegevens $bedrijfsgegevens, Product $p, Webinar $webinar)
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
			$gateway->setApiKey('test_N3BbdyKoizxGlYlbPqjUGE3eMpIZJC');
			$response = $gateway->purchase(
				[
					'amount'=> $request->get('bedrag') * 1.21,
					'issuer'=> $request->get('issuer'),
					'description'=> $request->get('omschrijving'),
					'returnUrl'=> route('test.bestel.bedankt', array('order_id='.$order_id)),
					'notifyUrl'=> route('test.webhook'),
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
			$webinars = $webinar->all();
			return view('testomgeving.webinar.index', compact('webinars'))->with(['message'=> 'Er is iets fout gegaan, neem a.u.b. contact op met jeroen@digitusmarketing.nl']);
		}

	}

	public function getCaseKlanten(Caseklant $caseklant)
	{
		$caseklanten = $caseklant->all();

		return view('testomgeving.caseklanten.index', compact('caseklanten'));
	}

	public function getKlant(Caseklant $ck, $slug)
	{
		$caseklant = $ck->where('slug',$slug)->first();

		return view('testomgeving.caseklanten.caseklant', compact('caseklant'));
	}

	public function getKlantCases(Zaak $c, $slug, $caseslug)
	{
		$case = $c->where('slug',$caseslug)->first();
		return view('testomgeving.caseklanten.klantcases', compact('case'));
	}

	public function createDebitor($input, $email){
		$newdebtor = new \Hyperized\Wefact\Debtor();
		$debtor = $newdebtor->add($input);
	}

}