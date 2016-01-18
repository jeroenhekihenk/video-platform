<?php namespace App\Http\Controllers\Member;

use App\Benodigd;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\BenodigdRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;
use Mail;

use Intervention\Image\ImageManagerStatic as Image;

class MemberBenodigdhedenController extends Controller {

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

	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
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
	public function index()
	{
		$member = $this->auth->user();
		$benodigdheid = Benodigd::find($member->benodigd_id);

		return view('member.benodigdheden.index', compact('member', 'benodigdheid'));
	}

	public function create()
	{
		return view('member.benodigdheden.create');
	}

	public function store(User $user, Benodigd $benodigd, Request $request)
	{
		// Maak de directories anders werkt het onderstaande niet.......
		if(!file_exists('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') ) || 
		   !file_exists('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') . '/teamfoto') ||
		   !file_exists('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') . '/slides') ||
		   !file_exists('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') . '/recensies')	)
		{

			mkdir('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/'  , 0755);
			mkdir('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/teamfoto/'  , 0755);
			mkdir('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/slides/'  , 0755);
			mkdir('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/recensies/'  , 0755);

		}

		// Paths declaren
		$destinationPath 	= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/';
		$teamfotoPath 		= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/teamfoto/';
		$slidesPath			= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/slides/';
		$recensiesPath		= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/recensies/';

		if($request->hasFile('logo'))
		{
			$logo 				= $request->file('logo');
			$logoname 			= $logo->getClientOriginalName();
			$encoded 			= urldecode($logoname);
			$path 				= $destinationPath.$encoded;
			$logoimage 			= Image::make($logo->getRealPath())->widen(810)->save($path);
			$logoPath			= $path;
		} else {
			$logoPath = null;
		}
		if($request->hasFile('teamfoto'))
		{
			$teamfoto 			= $request->file('teamfoto');
			$teamfotoname	 	= $teamfoto->getClientOriginalName();
			$encoded 			= urldecode($teamfotoname);
			$path 				= $teamfotoPath.$encoded;
			$teamfotoimage		= Image::make($teamfoto->getRealPath())->widen(810)->save($path);
			$teamfotoPath		= $path;
			// $upload_success 	= $teamfoto->move($destinationPath, $encoded);
			// $teamfotoimage		= str_replace('\\', '/', $upload_success);
		} else {
			$teamfotoPath		 = null;
		}
		if($request->hasFile('foto1'))
		{
			$foto1 				= $request->file('foto1');
			$foto1name 			= $foto1->getClientOriginalName();
			$encoded 			= urldecode($foto1name);
			$path 				= $slidesPath.$encoded;
			$foto1image			= Image::make($foto1->getRealPath())->widen(740)->crop(740, 400)->save($path);
			$foto1Path			= $path;

			// $upload_success 	= $foto1->move($slidesPath, $encoded);
			// $foto1image		= str_replace('\\', '/', $upload_success);
		} else {
			$foto1Path 			= null;
		}
		if($request->hasFile('foto2'))
		{
			$foto2 				= $request->file('foto2');
			$foto2name 			= $foto2->getClientOriginalName();
			$encoded 			= urldecode($foto2name);
			$path 				= $slidesPath.$encoded;
			$foto2image 		= Image::make($foto2->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto2Path 			= $path;

			// $upload_success 	= $foto2->move($slidesPath, $encoded);
			// $foto2image			= str_replace('\\', '/', $upload_success);
		} else {
			$foto2Path = null;
		}
		if($request->hasFile('foto3'))
		{
			$foto3 				= $request->file('foto3');
			$foto3name 			= $foto3->getClientOriginalName();
			$encoded 			= urldecode($foto3name);
			$path 				= $slidesPath.$encoded;
			$foto3image 		= Image::make($foto3->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto3Path 			= $path;

			// $upload_success 	= $foto3->move($slidesPath, $encoded);
			// $foto3image			= str_replace('\\', '/', $upload_success);
		} else {
			$foto3Path = null;
		}
		if($request->hasFile('foto4'))
		{
			$foto4 				= $request->file('foto4');
			$foto4name 			= $foto4->getClientOriginalName();
			$encoded 			= urldecode($foto4name);
			$path 				= $slidesPath.$encoded;
			$foto4image 		= Image::make($foto4->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto4Path 			= $path;

			// $upload_success 	= $foto4->move($slidesPath, $encoded);
			// $foto4image			= str_replace('\\', '/', $upload_success);
		} else {
			$foto4Path = null;
		}
		if($request->hasFile('foto5'))
		{
			$foto5 				= $request->file('foto5');
			$foto5name 			= $foto5->getClientOriginalName();
			$encoded 			= urldecode($foto5name);
			$path 				= $slidesPath.$encoded;
			$foto5image 		= Image::make($foto5->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto5Path 			= $path;

			// $upload_success 	= $foto5->move($slidesPath, $encoded);
			// $foto5image			= str_replace('\\', '/', $upload_success);
		} else {
			$foto5Path = null;
		}
		if($request->hasFile('recensie1_foto'))
		{
			$recensie1 			= $request->file('recensie1_foto');
			$recensie1name 		= $recensie1->getClientOriginalName();
			$encoded 			= urldecode($recensie1name);
			$path 				= $recensiesPath.$encoded;
			$recensie1image 	= Image::make($recensie1->getRealPath())->widen(100)->save($path);
			$recensie1Path 		= $path;

			// $upload_success 	= $recensie1->move($recensiesPath, $encoded);
			// $recensie1image		= str_replace('\\', '/', $upload_success);
		} else {
			$recensie1Path = null;
		}
		if($request->hasFile('recensie2_foto'))
		{
			$recensie2 			= $request->file('recensie2_foto');
			$recensie2name 		= $recensie2->getClientOriginalName();
			$encoded 			= urldecode($recensie2name);
			$path 				= $recensiesPath.$encoded;
			$recensie2image		= Image::make($recensie2->getRealPath())->widen(100)->save($path);
			$recensie2Path		= $path;

			// $upload_success 	= $recensie2->move($recensiesPath, $encoded);
			// $recensie2Path		= str_replace('\\', '/', $upload_success);
		} else {
			$recensie2Path 		= null;
		}
		if($request->hasFile('recensie3_foto'))
		{
			$recensie3 			= $request->file('recensie3_foto');
			$recensie3name 		= $recensie3->getClientOriginalName();
			$encoded 			= urldecode($recensie3name);
			$path 				= $recensiesPath.$encoded;
			$recensie3image 	= Image::make($recensie3->getRealPath())->widen(100)->save($path);
			$recensie3Path 		= $path;

			// $upload_success 	= $recensie3->move($recensiesPath, $encoded);
			// $recensie3Path		= str_replace('\\', '/', $upload_success);
		} else {
			$recensie3Path = null;
		}
		if($request->hasFile('recensie4_foto'))
		{
			$recensie4 			= $request->file('recensie4_foto');
			$recensie4name 		= $recensie4->getClientOriginalName();
			$encoded 			= urldecode($recensie4name);
			$path 				= $recensiesPath.$encoded;
			$recensie4image		= Image::make($recensie4->getRealPath())->widen(100)->save($path);
			$recensie4Path 		= $path;

			// $upload_success 	= $recensie4->move($recensiesPath, $encoded);
			// $recensie4Path		= str_replace('\\', '/', $upload_success);
		} else {
			$recensie4Path = null;
		}
		if($request->hasFile('recensie5_foto'))
		{
			$recensie5 			= $request->file('recensie5_foto');
			$recensie5name 		= $recensie5->getClientOriginalName();
			$encoded 			= urldecode($recensie5name);
			$path 				= $recensiesPath.$encoded;
			$recensie5image 	= Image::make($recensie5->getRealPath())->widen(100)->save($path);
			$recensie5Path		= $path;

			// $upload_success 	= $recensie5->move($recensiesPath, $encoded);
			// $recensie5Path		= str_replace('\\', '/', $upload_success);
		} else {
			$recensie5Path = null;
		}
		if($request->hasFile('recensie6_foto'))
		{
			$recensie6 			= $request->file('recensie1_foto');
			$recensie6name 		= $recensie6->getClientOriginalName();
			$encoded 			= urldecode($recensie6name);
			$path 				= $recensiesPath.$encoded;
			$recensie6image 	= Image::make($recensie6->getRealPath())->widen(100)->save($path);
			$recensie6Path 		= $path;

			// $upload_success 	= $recensie6->move($recensiesPath, $encoded);
			// $recensie6Path		= str_replace('\\', '/', $upload_success);
		} else {
			$recensie6Path = null;
		}




		$newbenodigd = new $benodigd(array(
			'sportschoolnaam'			=> $request->get('sportschoolnaam'),
			'aanmeldemail'				=> $request->get('aanmeldemail'),
			'waaromsportschool'			=> $request->get('waaromsportschool'),
			'welkomstpagina'			=> $request->get('welkomstpagina'),
			'bedankpagina'				=> $request->get('bedankpagina'),
			'logo'						=> $logoPath,
			'teamfoto'					=> $teamfotoPath,
			'foto1'						=> $foto1Path,
			'foto2'						=> $foto2Path,
			'foto3'						=> $foto3Path,
			'foto4'						=> $foto4Path,
			'foto5'						=> $foto5Path,
			'recensie1_foto'			=> $recensie1Path,
			'recensie1_tekst'			=> $request->get('recensie1_tekst'),
			'recensie1_naam'			=> $request->get('recensie1_naam'),
			'recensie2_foto'			=> $recensie2Path,
			'recensie2_tekst'			=> $request->get('recensie2_tekst'),
			'recensie2_naam'			=> $request->get('recensie2_naam'),
			'recensie3_foto'			=> $recensie3Path,
			'recensie3_tekst'			=> $request->get('recensie3_tekst'),
			'recensie3_naam'			=> $request->get('recensie3_naam'),
			'recensie4_foto'			=> $recensie4Path,
			'recensie4_tekst'			=> $request->get('recensie4_tekst'),
			'recensie4_naam'			=> $request->get('recensie4_naam'),
			'recensie5_foto'			=> $recensie5Path,
			'recensie5_tekst'			=> $request->get('recensie5_tekst'),
			'recensie5_naam'			=> $request->get('recensie5_naam'),
			'recensie6_foto'			=> $recensie6Path,
			'recensie6_tekst'			=> $request->get('recensie6_tekst'),
			'recensie6_naam'			=> $request->get('recensie6_naam'),
		));

		$newbenodigd->save();

		$user = $user->findOrFail($request->get('user_id'));
		$user->benodigd_id = $newbenodigd->id;
		$user->save();

		Mail::send('includes.email.member.benodigdheden-aangeleverd',
			array(
				'naam'=>$user->voornaam. ' ' .$user->achternaam,
				'email'=>$user->email,
			), function($message)
			{
				$message->to('info@digitusmarketing.nl', 'Digitus Marketing')->subject('Benodigdheden aangeleverd!');
			});

		return redirect('member');
	}

	public function edit($id, Benodigd $benodigdheid)
	{
		$benodigd = $benodigdheid->findOrFail($id);
		return view('member.benodigdheden.edit', compact(['benodigd']));
	}

	public function update($id, User $user, Benodigd $benodigdheid, Request $request)
	{
		$benodigd = $benodigdheid->findOrFail($id);

		// Checken of de directories al bestaan
		if(!file_exists(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') )) || 
		   !file_exists(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') ). '/teamfoto') ||
		   !file_exists(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') ). '/slides/') ||
		   !file_exists(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') ). '/recensies')	)
		{

			mkdir(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-') ) , 0755);
			mkdir(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/teamfoto' ) , 0755);
			mkdir(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/slides/' ) , 0755);
			mkdir(public_path('images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/recensies' ) , 0755);

		}

		$destinationPath 	= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-');
		$teamfotoPath 		= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/teamfoto/';
		$slidesPath			= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/slides/';
		$recensiesPath		= 'images/tabapps/'.str_slug($request->get('sportschoolnaam'), '-'). '/recensies/';


		if($request->hasFile('logo'))
		{
			$logo 				= $request->file('logo');
			$logoname 			= $logo->getClientOriginalName();
			$encoded 			= urldecode($logoname);
			$path 				= $destinationPath.$encoded;
			$logoimage 			= Image::make($logo->getRealPath())->widen(810)->save($path);
			$logoPath			= $path;
		} else {
			$logoPath			= $benodigd->logo;
		}
		if($request->hasFile('teamfoto'))
		{
			$teamfoto 			= $request->file('teamfoto');
			$teamfotoname	 	= $teamfoto->getClientOriginalName();
			$encoded 			= urldecode($teamfotoname);
			$path 				= $teamfotoPath.$encoded;
			$teamfotoimage		= Image::make($teamfoto->getRealPath())->widen(810)->save($path);
			$teamfotoPath		= $path;
		} else {
			$teamfotoPath		= $benodigd->teamfoto;
		}
		if($request->hasFile('foto1'))
		{
			$foto1 				= $request->file('foto1');
			$foto1name 			= $foto1->getClientOriginalName();
			$encoded 			= urldecode($foto1name);
			$path 				= $slidesPath.$encoded;
			$foto1image			= Image::make($foto1->getRealPath())->widen(740)->crop(740, 400)->save($path);
			$foto1Path			= $path;
		} else {
			$foto1Path 			= $benodigd->foto1;
		}
		if($request->hasFile('foto2'))
		{
			$foto2 				= $request->file('foto2');
			$foto2name 			= $foto2->getClientOriginalName();
			$encoded 			= urldecode($foto2name);
			$path 				= $slidesPath.$encoded;
			$foto2image 		= Image::make($foto2->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto2Path 			= $path;
		} else {
			$foto2Path			= $benodigd->foto2;
		}
		if($request->hasFile('foto3'))
		{
			$foto3 				= $request->file('foto3');
			$foto3name 			= $foto3->getClientOriginalName();
			$encoded 			= urldecode($foto3name);
			$path 				= $slidesPath.$encoded;
			$foto3image 		= Image::make($foto3->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto3Path 			= $path;
		} else {
			$foto3Path			= $benodigd->foto3;
		}
		if($request->hasFile('foto4'))
		{
			$foto4 				= $request->file('foto4');
			$foto4name 			= $foto4->getClientOriginalName();
			$encoded 			= urldecode($foto4name);
			$path 				= $slidesPath.$encoded;
			$foto4image 		= Image::make($foto4->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto4Path 			= $path;
		} else {
			$foto4Path 			= $benodigd->foto4;
		}
		if($request->hasFile('foto5'))
		{
			$foto5 				= $request->file('foto5');
			$foto5name 			= $foto5->getClientOriginalName();
			$encoded 			= urldecode($foto5name);
			$path 				= $slidesPath.$encoded;
			$foto5image 		= Image::make($foto5->getRealPath())->widen(740)->crop(740,400)->save($path);
			$foto5Path 			= $path;
		} else {
			$foto5Path 			= $benodigd->foto5;
		}
		if($request->hasFile('recensie1_foto'))
		{
			$recensie1 			= $request->file('recensie1_foto');
			$recensie1name 		= $recensie1->getClientOriginalName();
			$encoded 			= urldecode($recensie1name);
			$path 				= $recensiesPath.$encoded;
			$recensie1image 	= Image::make($recensie1->getRealPath())->widen(100)->save($path);
			$recensie1Path 		= $path;
		} else {
			$recensie1Path 		= $benodigd->recensie1_foto;
		}
		if($request->hasFile('recensie2_foto'))
		{
			$recensie2 			= $request->file('recensie2_foto');
			$recensie2name 		= $recensie2->getClientOriginalName();
			$encoded 			= urldecode($recensie2name);
			$path 				= $recensiesPath.$encoded;
			$recensie2image		= Image::make($recensie2->getRealPath())->widen(100)->save($path);
			$recensie2Path		= $path;
		} else {
			$recensie2Path 		= $benodigd->recensie2_foto;
		}
		if($request->hasFile('recensie3_foto'))
		{
			$recensie3 			= $request->file('recensie3_foto');
			$recensie3name 		= $recensie3->getClientOriginalName();
			$encoded 			= urldecode($recensie3name);
			$path 				= $recensiesPath.$encoded;
			$recensie3image 	= Image::make($recensie3->getRealPath())->widen(100)->save($path);
			$recensie3Path 		= $path;

		} else {
			$recensie3Path		= $benodigd->recensie3_foto;
		}
		if($request->hasFile('recensie4_foto'))
		{
			$recensie4 			= $request->file('recensie4_foto');
			$recensie4name 		= $recensie4->getClientOriginalName();
			$encoded 			= urldecode($recensie4name);
			$path 				= $recensiesPath.$encoded;
			$recensie4image		= Image::make($recensie4->getRealPath())->widen(100)->save($path);
			$recensie4Path 		= $path;
		} else {
			$recensie4Path 		= $benodigd->recensie4_foto;
		}
		if($request->hasFile('recensie5_foto'))
		{
			$recensie5 			= $request->file('recensie5_foto');
			$recensie5name 		= $recensie5->getClientOriginalName();
			$encoded 			= urldecode($recensie5name);
			$path 				= $recensiesPath.$encoded;
			$recensie5image 	= Image::make($recensie5->getRealPath())->widen(100)->save($path);
			$recensie5Path		= $path;
		} else {
			$recensie5Path 		= $benodigd->recensie5_foto;
		}
		if($request->hasFile('recensie6_foto'))
		{
			$recensie6 			= $request->file('recensie1_foto');
			$recensie6name 		= $recensie6->getClientOriginalName();
			$encoded 			= urldecode($recensie6name);
			$path 				= $recensiesPath.$encoded;
			$recensie6image 	= Image::make($recensie6->getRealPath())->widen(100)->save($path);
			$recensie6Path 		= $path;
		} else {
			$recensie6Path 		= $benodigd->recensie6_foto;
		}

		$benodigd->update(array(
			'sportschoolnaam'			=> $request->get('sportschoolnaam'),
			'waaromsportschool'			=> $request->get('waaromsportschool'),
			'welkomstpagina'			=> $request->get('welkomstpagina'),
			'bedankpagina'				=> $request->get('bedankpagina'),
			'logo'						=> $logoPath,
			'teamfoto'					=> $teamfotoPath,
			'foto1'						=> $foto1Path,
			'foto2'						=> $foto2Path,
			'foto3'						=> $foto3Path,
			'foto4'						=> $foto4Path,
			'foto5'						=> $foto5Path,
			'recensie1_foto'			=> $recensie1Path,
			'recensie1_tekst'			=> $request->get('recensie1_tekst'),
			'recensie1_naam'			=> $request->get('recensie1_naam'),
			'recensie2_foto'			=> $recensie2Path,
			'recensie2_tekst'			=> $request->get('recensie2_tekst'),
			'recensie2_naam'			=> $request->get('recensie2_naam'),
			'recensie3_foto'			=> $recensie3Path,
			'recensie3_tekst'			=> $request->get('recensie3_tekst'),
			'recensie3_naam'			=> $request->get('recensie3_naam'),
			'recensie4_foto'			=> $recensie4Path,
			'recensie4_tekst'			=> $request->get('recensie4_tekst'),
			'recensie4_naam'			=> $request->get('recensie4_naam'),
			'recensie5_foto'			=> $recensie5Path,
			'recensie5_tekst'			=> $request->get('recensie5_tekst'),
			'recensie5_naam'			=> $request->get('recensie5_naam'),
			'recensie6_foto'			=> $recensie6Path,
			'recensie6_tekst'			=> $request->get('recensie6_tekst'),
			'recensie6_naam'			=> $request->get('recensie6_naam'),
		));

		$user = $user->findOrFail($request->get('user_id'));
		$user->benodigd_id = $benodigd->id;
		// $user->benodigdheden = '1';
		$user->save();

		Mail::send('includes.email.member.benodigdheden-update',
			array(
				'naam'=>$user->voornaam. ' ' .$user->achternaam,
				'email'=>$user->email,
			), function($message)
			{
				$message->to('info@digitusmarketing.nl', 'Digitus Marketing')->subject('Benodigdheden geupdate!');
			});

		// Mail::send('includes.email.benodigdheden-update', 
		// 	array('voornaam'=>$user->voornaam, 'achternaam'=>$user->achternaam, 'email'=>$user->email), function($message)
		// 	{
		// 		// $message->from('info@digitusmarketing.nl', 'Digitus Marketing');
		// 		$message->to('jeroen@digitusmarketing.nl', 'Digitus Marketing')->subject($user->email.' Heeft zijn benodigdheden aangepast.');
		// 	});

		return redirect('member');
	}

	public function destroy(Post $post, $id)
	{
		$post = $post->find($id);

		$post->delete();

		return redirect()->back();
	}

}
