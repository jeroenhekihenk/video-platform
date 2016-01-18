<?php namespace App\Http\Controllers\Admin;

use App\Ebook;
use App\Repositories\EbookRepository;
use App\Http\Requests\EbookRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Response;

class AdminEbooksController extends Controller {

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

	private $ebookrepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(EbookRepository $ebookrepository)
	{
		$this->ebookrepository = $ebookrepository;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Ebook $ebook)
	{
		$ebooks = $this->ebookrepository->getAllWithTrashed();

		// dd($this->ebookrepository->findOrFail(4)->pdf);

		return view('admin.ebooks.index', compact(['ebooks']));
	}

	public function create()
	{
		return view('admin.ebooks.create');
	}

	public function store(Ebook $ebook, EbookRequest $request)
	{

		if($request->hasFile('image'))
		{
			$file 				= $request->file('image');
			$destinationPath 	= 'images/digitus/ebooks';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$encoded 			= str_replace(' ', '-', $encoded);
			$image 				= Image::make($file)->save('images/digitus/ebooks/'.$encoded, 60);
			// $upload_success 	= $file->move($destinationPath, $encoded);
			$ebookpath			= 'images/digitus/ebooks/'.$encoded;
		} else {
			$ebookpath = '';
		}

		if($request->hasFile('pdf'))
		{
			$file 				= $request->file('pdf');
			$destinationPath 	= 'uploads/ebooks';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$encoded 			= str_replace(' ', '-', $encoded);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$pdfpath			= 'uploads/ebooks/'.$encoded;
		} else {
			$pdfpath = '';
		}

		$newebook = new $ebook([
			'active'				=> '0',
			'naam'					=> $request->get('naam'),
			'slogan_titel'			=> $request->get('slogan_titel'),
			'slogan_tekst'			=> $request->get('slogan_tekst'),
			'image'					=> $ebookpath,
			'downloads'				=> $request->get('downloads'),
			'pdf'					=> $pdfpath,
			'form_link'				=> $request->get('form_link'),
			'form_u'				=> $request->get('form_u'),
			'form_id'				=> $request->get('form_id'),
			'form_token'			=> $request->get('form_token'),
			'form_field1'			=> $request->get('form_field1'),
			'form_field2'			=> $request->get('form_field2'),
			'form_field3'			=> $request->get('form_field3'),
			'form_field4'			=> $request->get('form_field4'),
			'field1_placeholder'	=> $request->get('field1_placeholder'),
			'field2_placeholder'	=> $request->get('field2_placeholder'),
			'field3_placeholder'	=> $request->get('field3_placeholder'),
			'field4_placeholder'	=> $request->get('field4_placeholder'),
		]);

		$newebook->save();

		// Stuur email naar emailadres met inloggegevens

		return redirect('jandje/ebooks');
	}

	public function show($id)
	{
		$ebook = $this->ebookrepository->findOrFail($id);

		return Response::json(['success'=>true, 'ebook'=>$ebook], 200);
	}

	public function edit($id)
	{
		$ebook = $this->ebookrepository->findOrFail($id);
		return view('admin.ebooks.edit', compact(['ebook']));
	}

	public function update($id, EbookRequest $request)
	{
		$ebook = $this->ebookrepository->findOrFail($id);

		if($request->hasFile('image'))
		{
			$file 				= $request->file('image');
			$destinationPath 	= 'images/digitus/ebooks';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$encoded 			= str_replace(' ', '-', $encoded);
			$image 				= Image::make($file)->save('images/digitus/ebooks/'.$encoded, 60);
			// $upload_success 	= $file->move($destinationPath, $encoded);
			$ebookpath			= 'images/digitus/ebooks/'.$encoded;
		} else {
			$ebookpath = $ebook->image;
		}

		if($request->hasFile('pdf'))
		{
			$file 				= $request->file('pdf');
			$destinationPath 	= 'uploads/ebooks';
			$filename 			= $file->getClientOriginalName();
			$encoded 			= urldecode($filename);
			$encoded 			= str_replace(' ', '-', $encoded);
			$upload_success 	= $file->move($destinationPath, $encoded);
			$pdfpath			= 'uploads/ebooks/'.$encoded;
		} else {
			$pdfpath = $ebook->pdf;
		}

		$ebook->update([
			'active'				=> '0',
			'naam'					=> $request->get('naam'),
			'slogan_titel'			=> $request->get('slogan_titel'),
			'slogan_tekst'			=> $request->get('slogan_tekst'),
			'image'					=> $ebookpath,
			'downloads'				=> $request->get('downloads'),
			'pdf'					=> $pdfpath,
			'form_link'				=> $request->get('form_link'),
			'form_u'				=> $request->get('form_u'),
			'form_id'				=> $request->get('form_id'),
			'form_token'			=> $request->get('form_token'),
			'form_field1'			=> $request->get('form_field1'),
			'form_field2'			=> $request->get('form_field2'),
			'form_field3'			=> $request->get('form_field3'),
			'form_field4'			=> $request->get('form_field4'),
			'field1_placeholder'	=> $request->get('field1_placeholder'),
			'field2_placeholder'	=> $request->get('field2_placeholder'),
			'field3_placeholder'	=> $request->get('field3_placeholder'),
			'field4_placeholder'	=> $request->get('field4_placeholder'),
		]);

		return redirect('jandje/ebooks');
	}

	public function destroy($id)
	{
		$ebook = $this->ebookrepository->findOrFail($id);

		$ebook->delete();

		return redirect()->back();
	}

	public function setActive($id)
	{
		$ebook = $this->ebookrepository->findOrFail($id);

		$ebooks = $this->ebookrepository->getall();

		foreach($ebooks as $book)
		{
			if($book->active == '1')
			{
				$book->update(['active'=>'0']);
			} elseif($ebook->deleted_at != null || $book->deleted_at != null) {

			} else {

			}
		}

		if($ebook->active == '1')
		{

		} else {
			$ebook->update([
				'active'=>'1',
			]);
		}

		return redirect()->back();
	}

	public function setDisabled($id)
	{
		$ebook = $this->ebookrepository->findOrFail($id);

		if($ebook->active == '0')
		{

		} else {
			$ebook->update([
				'active'=>'0',
			]);
		}

		return redirect()->back();

	}

	public function restoreEbook($id)
	{
		$ebook = $this->ebookrepository->restore($id);
		$ebook->restore();

		return redirect()->back();

	}

	public function forceDelete($id, Ebook $boek)
	{
		$ebook = $this->ebookrepository->forceDelete($id);
		$ebook->forceDelete();

		return redirect()->back();
	}

}
