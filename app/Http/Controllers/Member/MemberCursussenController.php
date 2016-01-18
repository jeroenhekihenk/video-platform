<?php namespace App\Http\Controllers\Member;

use App\Cursus;
use App\User;
use App\Role;
use App\Repositories\CursusRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

class MemberCursussenController extends Controller {

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
	public function index(Cursus $cursus)
	{
		$member = $this->auth->user();
		$cursussen = $this->cursusrepository->getAllCursussen();

		return view('member.cursus.index', compact('member', 'cursussen'));
	}

	public function show($slug, Cursus $cursus)
	{
		$cursus = $cursus->where('slug',$slug)->first();
		$hoofdstukken = $cursus->hoofdstukken->sortBy('id');
		$member = $this->auth->user();

		// $videos = $cursus->videos->sortByDesc('plan_id');
		// dd($hoofdstukken->videos);

		if($member->cursussen->contains($cursus->id))
		{
			return view('member.cursus.cursus', compact('cursus', 'member', 'hoofdstukken'));
		}
		return redirect()->back();
	}

}
