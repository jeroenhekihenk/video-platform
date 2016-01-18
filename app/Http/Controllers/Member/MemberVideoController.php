<?php namespace App\Http\Controllers\Member;

use App\Repositories\VideoRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\BenodigdRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

class MemberVideoController extends Controller {

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

	public function __construct(Guard $auth, Registrar $registrar, VideoRepository $videorepository)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->videorepository = $videorepository;
		$this->middleware('is.member');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = $this->auth->user();
		$pvideos = $this->videorepository->getPaidVideos();
		$fvideos = $this->videorepository->getFreeVideos();
		return view('member.videos.index', compact('pvideos', 'fvideos', 'user'));
	}

	public function show($id)
	{
		$video = $this->videorepository->getVideo($id);
		return view('member.videos.video', compact('video'));
	}

}
