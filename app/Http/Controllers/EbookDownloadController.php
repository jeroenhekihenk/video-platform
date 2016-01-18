<?php namespace App\Http\Controllers;

use App\Ebook;
use Response;
use Log;
use Illuminate\Http\Request;
use Mail;

class EbookDownloadController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function getCount(Ebook $ebook)
	{
		$ebook = $ebook->where('active', '1')->first();
		// $downloads = $ebook->downloads;
		// dd($ebook);

		return Response::json(['success'=>true, 'ebook'=>$ebook], 200);
	}

	public function postCount(Ebook $ebook, Request $request)
	{
		$ebook = $ebook->where('active', '1')->first();

		$ebook->downloads = $ebook->downloads + 1;
		$ebook->save();

		if($ebook->form_field1 != null && $ebook->form_field2 != null && $ebook->form_field3 != null && $ebook->form_field4 != null){
			$data = array(
				'email'			=> $request->get($ebook->form_field1),
				'naam'			=> $request->get($ebook->form_field2),
				'bedrijfsnaam'	=> $request->get($ebook->form_field3),
				'telefoon'		=> $request->get($ebook->form_field4),
				'ebooktitel'	=> $ebook->naam,
			);
		} elseif($ebook->form_field1 != null && $ebook->form_field2 != null && $ebook->form_field3 != null && $ebook->form_field4 == null) {

			$voornaam = $request->get($ebook->form_field2);
			$achternaam = $request->get($ebook->form_field3);
			$naam = ($voornaam. ' ' .$achternaam);
			$data = array(
				'email'			=> $request->get($ebook->form_field1),
				'naam'			=> $naam,
				'bedrijfsnaam'	=> null,
				'telefoon'		=> null,
				'ebooktitel'	=> $ebook->naam,
			);

		} elseif($ebook->form_field1 != null && $ebook->form_field2 != null && $ebook->form_field3 == null && $ebook->form_field4 == null) {

			$data = array(
				'email'			=> $request->get($ebook->form_field1),
				'naam'			=> $request->get($ebook->form_field2),
				'bedrijfsnaam'	=> null,
				'telefoon'		=> null,
				'ebooktitel'	=> $ebook->naam,
			);
		}

		Mail::send('includes.email.tab-app.digitusmarketing', $data, function($message) use($data, $ebook)
		{
			$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
			$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
				->subject('Iemand heeft zojuist het ebook '. $ebook->naam . ' gedownload.');
		});


		// MERGE0 = EMAIL

		// MERGE1 = NAAM
		// MERGE2 = BEDRIJFSNAAM
		// MERGE3 = TELEFOONNUMMER

	}

	public function getSportschool()
	{
		$file = public_path()."/uploads/ebooks/Slimme-Facebook-Marketing-voor-Sportscholen.pdf";
		$headers = array('Content-Type:'=>'application/pdf',);

		return Response::download($file, 'Slimme-Facebook-Marketing-voor-Sportscholen.pdf', $headers);
	}

}
