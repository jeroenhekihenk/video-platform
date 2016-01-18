<?php namespace App\Http\Controllers\Member;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

class MemberAuthController extends Controller {

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

	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->middleware('auth', ['only'=>'index']);
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

	public function getLogin()
	{
		return view('member.auth.login');
	}

	public function postLogin(LoginRequest $request)
	{
		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			if($this->auth->check()) {
				$user = $this->auth->user();
				$user->last_login = Carbon::now('Europe/Amsterdam');
				$user->save();
			}
			return redirect()->intended('member');
		}

		return redirect('/login')
					->withInput($request->only('email', 'remember'))
					->with('message', 'De opgegeven gegevens zijn niet correct. Probeer het opnieuw.');
	}

	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/login');
	}

}
