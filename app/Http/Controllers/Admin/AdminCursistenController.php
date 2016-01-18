<?php namespace App\Http\Controllers\Admin;

use App\Cursist;
use App\User;
use App\Repositories\CursusRepository;
use App\Http\Requests\CursusRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class AdminCursistenController extends Controller {

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

	private $cursusrepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(CursusRepository $cursusrepository)
	{
		$this->cursusrepository = $cursusrepository;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		// Pak alle cursussen
		$cursus = $this->cursusrepository->findOrFail($id);

		// In view alle cursussen laten zien met bijbehorende cursisten
		return view('admin.cursist.index', compact(['cursus']));
	}

	public function sendConversieBevestiging($id, User $user)
	{
		$member = $user->find($id);
		$data = array('voornaam'=>$member->voornaam, 'achternaam'=>$member->achternaam, 'tab_app_link'=>$member->tab_app_link);

		// Verstuur contactformulier
		Mail::send('includes.email.conversiepixel', 
			$data, function($message) use($member)
			{
				$message->from('jeroen@digitusmarketing.nl', 'Digitus Marketing');
				$message->to($member->email, $member->voornaam.' '.$member->achternaam)->subject('Conversiepixel geplaatst!');
			});

		$member->conversiepixel = '1';
		$member->save();

		return redirect()->back();
	}

}
