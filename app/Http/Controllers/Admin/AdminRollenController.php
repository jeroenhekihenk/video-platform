<?php namespace App\Http\Controllers\Admin;

use App\Repositories\RollenRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRollenController extends Controller {

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

	private $rollenrepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(RollenRepository $rollenrepository)
	{
		$this->rollenrepository = $rollenrepository;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rollen = $this->rollenrepository->getAllRollen();

		return view('admin.rollen.index', compact(['rollen']));
	}

	public function create()
	{
		$rollen = $this->rollenrepository->getList();
		return view('admin.users.create', compact('rollen'));
	}

	public function store(User $user, RegisterRequest $request)
	{

		$file 				= $request->file('afbeelding');
		$destinationPath 	= 'images/users';
		$filename 			= $file->getClientOriginalName();
		$encoded 			= urlencode($filename);
		$upload_success 	= $file->move($destinationPath, $encoded);
		$image 				= str_replace('\\', '/', $upload_success);

		// Maak random wachtwoord
		$wachtwoord = '';
		$newuser = new $user([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'password'		=> bcrypt($request->get('password')),
			'afbeelding'	=> $image,
			'role_id'		=> $request->get('role_id'),
		]);

		$newuser->save();

		// Stuur email naar emailadres met inloggegevens

		return redirect('jandje/users');
	}

	public function edit($id)
	{
		$user = $this->userrepository->findOrFail($id);
		$rollen = $this->rollenrepository->getList();
		return view('admin.users.edit', compact(['user','rollen']));
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
			$upload_success 	= $file->move($destinationPath, $encoded);
			$image 				= str_replace('\\', '/', $upload_success);
		} else {
			$image = $user->afbeelding;
		}

		$user->update([
			'voornaam'		=> $request->get('voornaam'),
			'achternaam'	=> $request->get('achternaam'),
			'email'			=> $request->get('email'),
			'password'		=> bcrypt($request->get('password')),
			'afbeelding'	=> $image,
			'role_id'		=> $request->get('role_id'),
			'over'			=> $request->get('over'),
			'facebook'		=> $request->get('facebook'),
			'twitter'		=> $request->get('twitter'),
			'googleplus'	=> $request->get('googleplus'),
			'linkedin'		=> $request->get('linkedin')
		]);

		return redirect('jandje/users');
	}

	public function destroy($id)
	{
		$user = $this->userrepository->findOrFail($id);

		$user->delete();

		return redirect()->back();
	}

}
