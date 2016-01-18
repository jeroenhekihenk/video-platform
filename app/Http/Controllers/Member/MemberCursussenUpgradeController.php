<?php namespace App\Http\Controllers\Member;

use Auth;
use App\Cursus;
use App\User;
use App\Order;
use App\Role;
use App\Repositories\CursusRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Member\UpgradeRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Hyperized\Wefact\WefactAPI as Wefact;
use Omnipay;

class MemberCursussenUpgradeController extends Controller {

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

	public function __construct(Guard $auth, Registrar $registrar, CursusRepository $cursusrepository)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->cursusrepository = $cursusrepository;
		$this->middleware('is.member', ['only'=>'index']);
	}

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * The registrar implementation.
	 *
	 * @var Registrar
	 */
	protected $registrar;

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$cursus = $this->cursusrepository->findOrFail($id);
		$member = $this->auth->user();

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

		return view('member.cursus.upgrade.create', compact('cursus', 'member', 'methods', 'issuers'));
	}

	public function store(Order $order, User $usr, UpgradeRequest $request)
	{
		$user = $usr->where('email', '=', $request->get('email'))->first();
		// $dag = Carbon::now('Europe/Amsterdam')->format('jnyGis');
		// $order_id = $dag.'-'.$user->id;
		// dd(route('webinar.aanbod.bedankt', array('order_id='.$order_id,'pakket_id='.$request->get('pakket_id'))));

		// dd($request->get('betaalmethode'));

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
					'paymentMethod'=> $request->get('betaalmethode'),
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
					'betaalmethode'		=> $request->get('betaalmethode')
				]);

				$order->save();	

				$input = array(
					'CompanyName'	=> $user->bedrijfsgegevens->first()->bedrijfsnaam,
					'Sex'			=> $user->bedrijfsgegevens->first()->aanhef,
					'Initials'		=> $user->voornaam,
					'SurName'		=> $user->achternaam,
					'Address'		=> $user->bedrijfsgegevens->first()->adres,
					'ZipCode'		=> $user->bedrijfsgegevens->first()->postcode,
					'City'			=> $user->bedrijfsgegevens->first()->woonplaats,
					'Country'		=> $user->bedrijfsgegevens->first()->land,
					'EmailAddress'	=> $user->email,
					'Mailings'		=> 'yes',
					'PhoneNumber'	=> $user->bedrijfsgegevens->first()->telefoonnummer,
					'MobileNumber'	=> $user->bedrijfsgegevens->first()->mobielnummer,
					'InvoiceSex'	=> '',
					'InvoiceMethod'	=> '0',
				);
				$this->createDebitor($input, $user->email);	

				return redirect($response->getRedirectUrl());
			} else {
				// display error message
				return response()->json(['success' => false, 'errors'=>$response->getMessage()]);
			}
		} else {
			return redirect()->back()->with(['message'=> 'Er is iets fout gegaan, neem a.u.b. contact op met jeroen@digitusmarketing.nl']);
		}
	}

	public function createDebitor($input, $email){
		$newdebtor = new \Hyperized\Wefact\Debtor();
		$debtor = $newdebtor->add($input);
	}

}
