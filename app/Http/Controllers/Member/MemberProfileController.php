<?php namespace App\Http\Controllers\Member;

use App\User;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

class MemberProfileController extends Controller {

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

	public function __construct(UserRepository $userrepository, Guard $auth, Registrar $registrar)
	{
		$this->userrepository = $userrepository;
		$this->auth = $auth;
		$this->registrar = $registrar;
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

	public function editProfile($id, User $user)
	{
		if ($this->auth->check() && $this->auth->user()->id != $id)
		{
			return redirect()->back();
		}

		$member = $user->findOrFail($id);

		return view('member.profile.edit', compact('member'));
	}

	public function updateProfile($id, UpdateUserRequest $request)
	{
		$user = $this->userrepository->findOrFail($id);

		// dd($request->file('afbeelding'));

		if($request->hasFile('afbeelding'))
		{
			$file 				= $request->file('afbeelding');
			$destinationPath 	= 'images/users/'.$user->id;
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
		]);

		return redirect('member');
	}

}
