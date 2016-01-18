<?php namespace App\Http\Controllers\Admin;

use App\Benodigd;
use App\User;
use App\Repositories\RollenRepository;
use App\Repositories\PlanRepository;
use App\Repositories\UserRepository;
use App\Repositories\CursusRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\MemberRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;
use Mail;

use Intervention\Image\ImageManagerStatic as Image;

class AdminWebinarController extends Controller {

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

	private $userrepository;
	private $rollenrepository;
	private $planrepository;
	private $cursusrepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(UserRepository $userrepository, RollenRepository $rollenrepository, PlanRepository $planrepository, CursusRepository $cursusrepository, Guard $auth, Registrar $registrar)
	{
		$this->userrepository = $userrepository;
		$this->rollenrepository = $rollenrepository;
		$this->planrepository = $planrepository;
		$this->cursusrepository = $cursusrepository;
		$this->auth = $auth;
		$this->registrar = $registrar;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$admins = $this->userrepository->getAllAdministrators();
		$members = $this->userrepository->getAllMembers();
		// $gratisdemos = $this->userrepository->getAllGratisDemo();

		return view('admin.users.index', compact(['admins','members']));
	}

	public function create()
	{
		$rollen = $this->rollenrepository->getList();
		$plannen = $this->planrepository->getList();
		return view('admin.users.create', compact('rollen', 'plannen'));
	}

	public function store(User $user, RegisterRequest $request)
	{

	}


	public function show()
	{

	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function destroy()
	{

	}

	public function getIbora()
	{
		// Pak alle aanmeldingen voor het webinar
		$webinars = $this->userrepository->getWebinars();

		return view('admin.users.webinar', compact(['webinars']));
	}

}
