<?php namespace App\Http\Controllers\Ebooks;

use App\Ebook;
use Response;
use Log;
use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\Controller;

class EbookController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function get10Stappen(Ebook $book)
	{
		$ebook = $book->where('id','6')->first();
		return view('ebooks.ebook', compact('ebook'));
	}

	public function getBedankt10Stappen(Ebook $book)
	{
		$ebook = $book->where('id','1')->first();
		return view('ebooks.ebookbedankt', compact('ebook'));
	}

}
