<?php namespace App\Http\Controllers;

use App\User;
use App\Recensie;
use App\Repositories\PostRepository;

class HomeController extends Controller {

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
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(PostRepository $postrepository)
	{
		$this->postrepository = $postrepository;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $posts = $this->postrepository->getAllPosts();

		// $users = User::where('role_id','1')->take(3)->get();

		// $recensies = Recensie::where('uitgelicht','1')->get();

		return view('home.index');
	}

	public function privacyPolicy()
	{
		return view('home.privacypolicy');
	}

}
