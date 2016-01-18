<?php namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

class AdminController extends Controller {

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

	public function __construct(Guard $auth, Registrar $registrar, UserRepository $userrepository)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('auth', ['only'=>'index']);
		$this->userrepository = $userrepository;
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
	public function index()
	{
		$membercount = count($this->userrepository->getAllMembers());
		return view('admin.index', compact('membercount'));
	}

	public function getLogin()
	{
		return view('admin.auth.login');
	}

	public function postLogin(LoginRequest $request)
	{
		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{

			return redirect()->intended('jandje');
		}

		return redirect('jandje/login')
					->withInput($request->only('email', 'remember'))
					->with('message', 'De opgegeven gegevens zijn niet correct. Probeer het opnieuw.');
	}

	public function getRegister()
	{
		return view('admin.auth.registreren');
	}

	public function postRegister(User $user, RegisterRequest $request)
	{
		// $this->validate($request, ['voornaam'=>'required', 'achternaam'=>'required', 'email'=>'required', 'password'=>'required|confirmed', 'password_confirmation'=>'required']);
		// User::create($request->all());

		// return redirect('admin/login');
		// $validator = $this->registrar->validator($request->all());

		// if ($validator->fails())
		// {
		// 	$this->throwValidationException(
		// 		$request, $validator
		// 	);
		// }

		$newuser = new $user([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'password'		=> bcrypt($request->get('password')),
			'role_id'		=> $request->get('role_id'),
			'plan_id'		=> $request->get('role_id'),
		]);

		$newuser->save();

		// $this->auth->login($this->registrar->create($request->all()));

		return redirect('jandje/login');
	}

	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/');
	}

	public function icons()
	{
		return view('admin.icons');
	}

}
