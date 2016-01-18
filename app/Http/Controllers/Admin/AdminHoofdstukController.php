<?php namespace App\Http\Controllers\Admin;

use App\Hoofdstuk;
use App\Repositories\CursusRepository;
use App\Repositories\HoofdstukRepository;
use App\Http\Requests\HoofdstukRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHoofdstukController extends Controller {

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
	private $hoofdstukrepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(CursusRepository $cursusrepository, HoofdstukRepository $hoofdstukrepository)
	{
		$this->cursusrepository = $cursusrepository;
		$this->hoofdstukrepository = $hoofdstukrepository;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Pak alle videos
		$cursussen = $this->cursusrepository->getAllCursussen();

		// In view alle videos laten zien met bijbehorende cursus
		return view('admin.hoofdstuk.index', compact(['cursussen']));
	}

	public function create()
	{
		$cursussen = $this->cursusrepository->getList();
		return view('admin.hoofdstuk.create', compact('cursussen'));
	}

	public function store(HoofdstukRequest $request, Hoofdstuk $hoofdstuk)
	{


		$newhoofdstuk = new $hoofdstuk([
			'naam'		=> $request->get('naam'),
			'cursus_id'	=> $request->get('cursus_id'),
			'shortname' => str_slug($request->get('naam')),
		]);

		$newhoofdstuk->save();

		return redirect('jandje/hoofdstuk');
	}

	public function edit($id)
	{
		$hoofdstuk = $this->hoofdstukrepository->findOrFail($id);
		// $video = $this->videorepository->findOrFail($id);
		$cursussen = $this->cursusrepository->getList();
		// $plannen = $this->planrepository->getList();
		return view('admin.hoofdstuk.edit', compact(['hoofdstuk', 'cursussen']));
	}

	public function update($id, HoofdstukRequest $request)
	{
		$hoofdstuk = $this->hoofdstukrepository->findOrFail($id);

		$hoofdstuk->update([
			'naam'		=> $request->get('naam'),
			'cursus_id'	=> $request->get('cursus_id'),
			'shortname'	=> str_slug($request->get('naam')),
		]);

		return redirect('jandje/hoofdstuk');
	}

	public function destroy($id)
	{
		$hoofdstuk = $this->hoofdstukrepository->findOrFail($id);

		$hoofdstuk->delete();

		return redirect()->back();
	}

}
