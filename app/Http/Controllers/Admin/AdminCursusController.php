<?php namespace App\Http\Controllers\Admin;

use App\Cursus;
use App\Repositories\CursusRepository;
use App\Http\Requests\CursusRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCursusController extends Controller {

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
	public function index()
	{
		// Pak alle cursussen
		$cursussen = $this->cursusrepository->getAllCursussen();

		// In view alle cursussen laten zien met bijbehorende cursisten
		return view('admin.cursus.index', compact(['cursussen']));
	}

	public function create()
	{
		return view('admin.cursus.create');
	}

	public function store(CursusRequest $request, Cursus $cursus)
	{


		$newcursus = new $cursus([
			'naam'		=> $request->get('naam'),
			'content'	=> $request->get('content'),
			'slug'		=> str_slug($request->get('naam')),
		]);

		$newcursus->save();

		if($request->file('afbeelding'))
		{
			$file 				= $request->file('afbeelding');
			$destinationPath 	= 'images/cursussen/'.$newcursus->id;
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$image 				= str_replace('\\', '/', $upload_success);

		} else {
			$image = null;
		}

		$newcursus->update([
			'afbeelding'	=> $image,
		]);

		return redirect('jandje/cursus');
	}

	public function show($slug, Cursus $cursus)
	{
		$cursus = $cursus->where('slug',$slug)->first();
		$videos = $cursus->videos->sortByDesc('plan_id');
		return view('admin.cursus.cursus', compact('cursus', 'videos'));
	}

	public function edit($id)
	{
		$cursus = $this->cursusrepository->findOrFail($id);
		return view('admin.cursus.edit', compact(['cursus']));
	}

	public function update($id, CursusRequest $request)
	{
		$cursus = $this->cursusrepository->findOrFail($id);

		if($request->file('afbeelding'))
		{
			$file 				= $request->file('afbeelding');
			$destinationPath 	= 'images/cursussen/'.$cursus->id;
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$image 				= str_replace('\\', '/', $upload_success);

		} else {
			$image = null;
		}

		$cursus->update([
			'naam'		=> $request->get('naam'),
			'content'	=> $request->get('content'),
			'slug'		=> str_slug($request->get('naam')),
			'afbeelding'=> $image,
		]);

		// Cursus moet ook bijbehorende videos hebben

		return redirect('jandje/cursus');
	}

	public function destroy($id)
	{
		$cursus = $this->cursusrepository->findOrFail($id);

		// $cursus->hoofdstukken()->videos()->detach();
		$cursus->users()->detach();
		$cursus->delete();

		return redirect()->back();
	}

}
