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

class AdminUserController extends Controller {

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

		if($request->hasFile('afbeelding')) {
			$file 				= $request->file('afbeelding');
			$destinationPath 	= 'images/users';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$path 				= $destinationPath.'/'.$encoded;
			$profileimage		= Image::make($file->getRealPath())->widen(300)->save($path);
			$imagePath			= $path;
			// $upload_success 	= $file->move($destinationPath, $encoded);
			// $image 			= str_replace('\\', '/', $upload_success);
		} else {
			$imagePath = '';
		}

		$newuser = new $user([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'password'		=> bcrypt($request->get('password')),
			'afbeelding'	=> $imagePath,
			'role_id'		=> $request->get('role_id'),
			'plan_id'		=> $request->get('role_id'),
		]);

		$newuser->save();

		return redirect('jandje/users');
	}


	public function show($id)
	{
		// $id = user id
		// pak van de user de sportschool();
		// poep dit uit
		$user = User::find($id);
		$sportschool = $user->sportschool;

		return view('admin.users.sportschool', compact(['user']));
	}

	public function edit($id)
	{
		$user = $this->userrepository->findOrFail($id);
		$rollen = $this->rollenrepository->getList();
		$plannen = $this->planrepository->getList();
		return view('admin.users.edit', compact(['user','rollen', 'plannen']));
	}

	public function update($id, UpdateUserRequest $request)
	{
		$user = $this->userrepository->findOrFail($id);

		if($request->hasFile('afbeelding'))
		{
			$file 				= $request->file('afbeelding');
			$destinationPath 	= 'images/users';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urlencode($filename);
			$path 				= $destinationPath.'/'.$encoded;
			$profileimage		= Image::make($file->getRealPath())->widen(300)->save($path);
			$imagePath			= $path;

			// $upload_success 	= $file->move($destinationPath, $encoded);
			// $image 				= str_replace('\\', '/', $upload_success);
		} else {
			$imagePath = $user->afbeelding;
		}

		$user->update([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'afbeelding'	=> $imagePath,
			'role_id'		=> $request->get('role_id'),
			'over'			=> $request->get('over'),
			'facebook'		=> $request->get('facebook'),
			'twitter'		=> $request->get('twitter'),
			'googleplus'	=> $request->get('googleplus'),
			'linkedin'		=> $request->get('linkedin'),
			'plan'			=> $request->get('plan')
		]);



		return redirect('jandje/users');
	}

	public function destroy($id)
	{
		$user = $this->userrepository->findOrFail($id);

		if($user->role_id == '2')
		{
			if($user->benodigd_id != '' || null)
			{
				$benodigd = Benodigd::where('id', $user->benodigd_id)->first();
				$benodigd->delete();
			}
		}

		$user->delete();

		return redirect()->back();
	}

	public function createMember()
	{
		$plannen = $this->planrepository->getList();
		$cursussen = $this->cursusrepository->getList();
		return view('admin.users.createmember', compact('plannen', 'cursussen'));
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

	public function getEditMember($id)
	{
		$member = $this->userrepository->findOrFail($id);
		$plannen = $this->planrepository->getList();
		$cursussen = $this->cursusrepository->getList();
		return view('admin.users.editmember', compact('member', 'plannen', 'cursussen'));
	}

	public function postEditMember($id , UpdateUserRequest $request)
	{
		$user = $this->userrepository->findOrFail($id);

		if($request->hasFile('afbeelding'))
		{
			$file 				= $request->file('afbeelding');
			$destinationPath 	= 'images/users';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urlencode($filename);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$image 				= str_replace('\\', '/', $upload_success);
		} else {
			$image = $user->afbeelding;
		}

		$user->update([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'afbeelding'	=> $image,
			'over'			=> $request->get('over'),
			'facebook'		=> $request->get('facebook'),
			'twitter'		=> $request->get('twitter'),
			'googleplus'	=> $request->get('googleplus'),
			'linkedin'		=> $request->get('linkedin'),
			'plan_id'		=> $request->get('plan_id'),
			'tab_app'		=> $request->get('tab_app'),
			'tab_app_link'	=> $request->get('tab_app_link'),
		]);

		if($request->input('cursus')){
			$user->cursussen()->attach($request->input('cursus'));
		}
		if($request->input('loskoppel')){
			$user->cursussen()->detach($request->input('loskoppel'));
		}

		return redirect('jandje/users');
	}


}
