<?php namespace App\Http\Controllers\Admin;

use App\Video;
use App\Repositories\CursusRepository;
use App\Repositories\PlanRepository;
use App\Repositories\VideoRepository;
use App\Repositories\HoofdstukRepository;
use App\Http\Requests\VideoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminVideosController extends Controller {

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

	private $videorepository;
	private $cursusrepository;
	private $planrepository;
	private $hoofdstukrepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(VideoRepository $videorepository, CursusRepository $cursusrepository, PlanRepository $planrepository, HoofdstukRepository $hoofdstukrepository)
	{
		$this->videorepository = $videorepository;
		$this->cursusrepository = $cursusrepository;
		$this->planrepository = $planrepository;
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
		return view('admin.videos.index', compact(['cursussen']));
	}

	public function create()
	{
		// $cursussen = $this->cursusrepository->getList();
		$plannen = $this->planrepository->getList();
		$cursussen = $this->cursusrepository->getAllCursussen();
		return view('admin.videos.create', compact('plannen', 'cursussen'));
	}

	public function store(VideoRequest $request, Video $video)
	{


		$newvideo = new $video([
			'titel'			=> $request->get('titel'),
			'link'			=> $request->get('link'),
			'plan_id'		=> $request->get('plan_id'),
			'hoofdstuk_id'	=> $request->get('hoofdstuk_id'),
			'tool1_tekst'	=> $request->get('tool1_tekst'),
			'tool1_link'	=> $request->get('tool1_link'),
			'tool2_tekst'	=> $request->get('tool2_tekst'),
			'tool2_link'	=> $request->get('tool2_link'),
			'tool3_tekst'	=> $request->get('tool3_tekst'),
			'tool3_link'	=> $request->get('tool3_link'),
			'tool4_tekst'	=> $request->get('tool4_tekst'),
			'tool4_link'	=> $request->get('tool4_link'),
		]);

		$newvideo->save();
		if($request->file('thumbnail'))
		{
			$file 				= $request->file('thumbnail');
			$destinationPath 	= 'images/cursus/videos/'.$newvideo->id;
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$image 				= str_replace('\\', '/', $upload_success);

			$newvideo->update([
				'thumbnail'	=> $image,
			]);
		}

		return redirect('jandje/videos');
	}

	public function edit($id)
	{
		$video = $this->videorepository->findOrFail($id);
		$plannen = $this->planrepository->getList();
		$cursussen = $this->cursusrepository->getAllCursussen();
		return view('admin.videos.edit', compact(['video', 'cursussen', 'plannen']));
	}

	public function update($id, VideoRequest $request)
	{
		$video = $this->videorepository->findOrFail($id);

		if($request->file('thumbnail'))
		{
			$file 				= $request->file('thumbnail');
			$destinationPath 	= 'images/cursus/videos/'.$video->id;
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$image 				= str_replace('\\', '/', $upload_success);
		} else {
			$image = $video->thumbnail;
		}

		$video->update([
			'titel'			=> $request->get('titel'),
			'link'			=> $request->get('link'),
			'plan_id'		=> $request->get('plan_id'),
			'hoofdstuk_id'	=> $request->get('hoofdstuk_id'),
			'thumbnail'		=> $image,
			'tool1_tekst'	=> $request->get('tool1_tekst'),
			'tool1_link'	=> $request->get('tool1_link'),
			'tool2_tekst'	=> $request->get('tool2_tekst'),
			'tool2_link'	=> $request->get('tool2_link'),
			'tool3_tekst'	=> $request->get('tool3_tekst'),
			'tool3_link'	=> $request->get('tool3_link'),
			'tool4_tekst'	=> $request->get('tool4_tekst'),
			'tool4_link'	=> $request->get('tool4_link'),
		]);

		return redirect('jandje/videos');
	}

	public function destroy($id)
	{
		$video = $this->videorepository->findOrFail($id);

		$video->delete();

		return redirect()->back();
	}

}
