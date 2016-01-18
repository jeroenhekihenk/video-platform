<?php namespace App\Http\Controllers;

use Hyperized\Wefact\WefactAPI as Wefact;
use Illuminate\Http\Request;

class WefactController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('wefact.index');
		// return $this->sendInvoice(array('Identifier'=>1));

		// Lijst van producten
		// $product = new \Hyperized\Wefact\Product();
		// $productParams = [
		//     'searchfor' => 'invoice'
		// ];
		// $products = $product->list($productParams);
		// foreach($products as $product){
		// 	// var_dump($product);
		// 	if(is_array($product)){
		// 		foreach($product as $p){
		// 			foreach($p as $key => $value) {
		// 				echo $key . ':' . $value . "<Br>";
		// 			}
		// 			echo "<br>";
		// 			// echo $p;
		// 		}
		// 	} 
		// }


		// Bekijk factuur / facturen van debiteur
		// $invoice = new \Hyperized\Wefact\Debtor();
		// $productParams = array(
		// 	'Identifier'	=> '1',
		// );
		// $shows = $invoice->show($productParams);
		// foreach($shows as $show){
		// 	if(is_array($show)){
		// 		foreach($show as $key => $value){
		// 			if(is_array($value)){
		// 				foreach($value as $key => $val){
		// 					echo '&nbsp; &nbsp; &nbsp; -'.$key . ':' . $val . '<br>';	
		// 				}
		// 			} else {
		// 				echo $key . ':' . $value . '<br>';
		// 			}
		// 		}
		// 	}
		// }

		// Nieuwe Debiteur aanmaken
		// $newdebtor = new \Hyperized\Wefact\Debtor();
		// $debtorParams = array(
		// 	'CompanyName'	=> 'Testbedrijf',
		// 	'Sex'			=> 'M',
		// 	'Initials'		=> 'Hans',
		// 	'SurName'		=> 'Janssen',
		// 	'Address'		=> 'Digitusmarketinglaan 1337',
		// 	'ZipCode'		=> '1337 DM',
		// 	'City'			=> 'Hengelo',
		// 	'Country'		=> 'NL',
		// 	'EmailAddress'	=> 'info@digitusmarketing.nl',
		// 	'Mailings'		=> 'yes',
		// 	'PhoneNumber'	=> '',
		// 	'MobileNumber'	=> '+31621469068',
		// 	'InvoiceSex'	=> '',
		// 	'InvoiceMethod'	=> '0',
		// );
		// $debtor = $newdebtor->add($debtorParams);
		// print_r($debtor);

		// Nieuwe factuur maken en koppellen aan debiteur
		// $newinvoice = new \Hyperized\Wefact\Invoice();
		// $invoiceParameters = array(
		// 	'DebtorCode'	=> 'DB0001',
		// 	'InvoiceLines'	=> array(
		// 		array(
		// 		'Number'		=> 1,
		// 		'ProductCode'	=> 'P0001',
		// 		)
		// 	)
		// );
		// $factuur = $newinvoice->add($invoiceParameters);
		// print_r($factuur);

		// Lijst van facturen
		// $facturen = new \Hyperized\Wefact\Invoice();
		// $factuurParameters = array('order'=>'ASC');
		// $alles = $facturen->list($factuurParameters);
		// print_r($alles);

		// Laat factuur zien
		// $factuur = new \Hyperized\Wefact\Invoice();
		// $factuurParameter = array('Identifier'=>1);
		// $defactuur = $factuur->show($factuurParameter);
		// print_r($defactuur);

		// Factuur versturen
		// $factuur = new \Hyperized\Wefact\Invoice();
		// $invoiceParameters = array('Identifier'=>1);
		// $verstuur = $factuur->sendByEmail($invoiceParameters);
		// print_r($verstuur);

	}

	public function send(Request $request){
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
		// $debitor = $this->findDebitor(array('searchat'=>'EmailAddress','searchfor'=>$request->get('email'), 'limit'=>1, 'offset'=>1));

		// $invoicedetails = array(
		// 	'DebtorCode'=>$debtorcode,
		// 	'InvoiceLines'=> array(
		// 		array(
		// 			'Number'=>1,
		// 			'ProductCode'=>'P0001'
		// 		)
		// 	)
		// );
		// $factuur = $this->createInvoice($invoicedetails);
		// dd($factuur);

		// $factuurparameters = array(
		// 	'searchat'=>'DebtorCode',
		// 	'searchfor'=>$debtorcode,
		// );
		// $facturen = $this->showAllInvoices($factuurparameters);
		// foreach($facturen as $factur){
		// 	if(is_array($factur)){
		// 		foreach($factur as $key => $value){
		// 			if(is_array($value)){
		// 				foreach($value as $key => $val){
		// 					if($key == 'Identifier'){
		// 						$factuuridentifier = $val;
		// 					}
		// 				}
		// 			}
		// 		}
		// 	}
		// }

		// $sendinvoiceparameters = array(
		// 	'Identifier'=>$factuuridentifier
		// );
		// $this->sendInvoice($sendinvoiceparameters);
		// dd($facturen);

		
	}

	public function createDebitor($input, $email){
		$newdebtor = new \Hyperized\Wefact\Debtor();
		$debtor = $newdebtor->add($input);
		$this->findDebitor(array('searchat'=>'EmailAddress','searchfor'=>$email));
		// return $debtor;
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
		// dd($debtorcode);
		$newinvoice = new \Hyperized\Wefact\Invoice();
		$invoiceParameters = array(
			'DebtorCode'	=> $debtorcode,
			'InvoiceLines'	=> array(
				array(
				'Number'		=> 1,
				'ProductCode'	=> 'P0001',
				'DiscountPercentage' => 10,
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

		echo "Factuur is verzonden";
		// print_r($verstuur);
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

	public function postCreateMember(MemberRequest $request, User $user)
	{
		// Pak laatst aangemaakte member
		$laatste_member = $user->latest()->where('role_id','2')->first();
		if($laatste_member != null)
		{
			$laatste = $laatste_member->klantnummer;
		} else {
			$laatste = '420';
		}
		
		// Maak random wachtwoord
		$wachtwoord = str_random(8);
		$newuser = new $user([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'password'		=> bcrypt($wachtwoord),
			'tab_app'		=> $request->get('tab_app'),
			'tab_app_link'	=> $request->get('tab_app_link'),
			'benodigd_id'	=> null,
			'role_id'		=> '2',
			'plan_id'		=> $request->get('plan_id'),
			'klantnummer'	=> $laatste + 1,
		]);

		$data = array(
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'wachtwoord'	=> $wachtwoord,
		);

		// Stuur email naar emailadres met inloggegevens
		Mail::send('includes.email.newmember', 
			array('voornaam'=>$request->get('voornaam'), 'achternaam'=>$request->get('achternaam'), 'email'=>$request->get('email'), 'wachtwoord'=>$wachtwoord), function($message) use ($data)
			{
				// $message->from('info@digitusmarketing.nl', 'Digitus Marketing');
				$message->to($data['email'], $data['voornaam']. ' '.$data['achternaam'])->subject('Jouw inloggegevens');
			});

		$newuser->save();

		$newuser->cursussen()->attach($request->input('cursus'));


		return redirect('jandje/users');
	}

}