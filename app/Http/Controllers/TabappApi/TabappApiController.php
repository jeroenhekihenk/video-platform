<?php namespace App\Http\Controllers\TabappApi;

use Config,
Input,
Log,
Mail,
Response;
use App\Benodigd;
use App\Ebook;
use App\Http\Controllers\Controller;
use App\Sportschool;
use Carbon\Carbon;

class TabappApiController extends Controller {

	public function nextGen()
	{
		$apicode = Config::get('realtimeapicode.nextgen');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'				=> $entry->voornaam. ' ' .$entry->achternaam,
					'voornaam'			=> $entry->voornaam,
					'achternaam'		=> $entry->achternaam,
					'email'				=> $entry->email,
					'telefoonnummer'	=> $entry->telefoonnummer,
					// 'functie'			=> $entry->huidige_functie,
					// 'bedrijfsnaam'		=> $entry->bedrijfsnaam,
				);

				// Mail::send('includes.email.tab-app.nextgen', $data, function($message) use($data)
				// {
				// 	$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Nieuwsbrief aanmelding');
				// });
				Mail::send('includes.email.tab-app.nextgen', $data, function($message) use($data)
				{
					$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Nextgen aanmelding');
				});
				Mail::send('includes.email.tab-app.nextgen', $data, function($message) use($data)
				{
					$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
					$message->to('info@next-gen.com', 'Next Gen')
						->subject('Nextgen aanmelding');
				});

				// Stuur de aanvrager een bevestigingsmail dat de aanvraag in goede orde is ontvangen
				Mail::send('includes.email.tab-app.bevestiging-aanmelding', $data, function($message) use($data)
				{
					$message->from('info@next-gen.com', 'Next Gen');
					$message->to($data['email'], $data['voornaam']. ' ' .$data['achternaam'])
						->subject('Bevestiging van jouw aanmelding!');
				});

			}

		}


		return $response;
	}
	
	public function maartenVazquez()
	{
		$apicode = Config::get('realtimeapicode.maartenvazquez');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'voornaam'			=> $entry->fname,
					'achternaam'		=> $entry->lname,
					'email'				=> $entry->email,
				);

				Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				{
					$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
					$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
						->subject('Maarten Vazquez Nieuwsbrief aanmelding');
				});
				Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				{
					$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Maarten Vazquez Nieuwsbrief aanmelding');
				});

			}

		}


		return $response;
	}

	public function digitusmarketing()
	{
		$apicode = Config::get('realtimeapicode.digitusapi');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{

				$ebook = Ebook::where('active','1')->first();

				if($ebook)
				{
					$ebook->downloads = $ebook->downloads + 1;
					$ebook->save();
				}

				$data = array(
					'naam'			=> $entry->naam,
					'bedrijfsnaam'	=> $entry->bedrijfsnaam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
					'ebooktitel'	=> $ebook->naam,
				);
				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });
				Mail::send('includes.email.tab-app.digitusmarketing', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('rogier@digitusmarketing.nl', 'Digitus Marketing')
						->subject('HETE LEAD!!');
				});

			}

		}


		return $response;
	}

	public function horecaPersoneel()
	{

		$apicode = Config::get('realtimeapicode.horecapersoneel');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->voornaam. ' ' .$entry->achternaam,
					'voornaam'		=> $entry->voornaam,
					'achternaam'	=> $entry->achternaam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
					'woonplaats'	=> $entry->woonplaats,
					'kilometers'	=> $entry->kilometers,
					'tabnaam'		=> $entry->tabnaam,
					'functies'		=> $entry->functies,
					'plaatsad'		=> $entry->plaatsad,
				);

				if($entry->tabnaam == "TEST"){
					Log::info(Input::all());
					// Stuur kopie van email naar Digitus Marketing met SPOED!
					// Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					// {
					// 	$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
					// 	$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
					// 		->subject('SPOED!! Horecapersoneel aanmelding KOPIE');
					// });
				} elseif($entry->tabnaam == 'Spoed'){
					// Stuur email naar horecapersoneel met SPOED!
					Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					{
						$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
						$message->to('info@horecapersoneel.biz', 'Horeca Personeel')
							->subject('SPOED!! Horecapersoneel aanmelding');
					});
					// Mail naar jan booiman (TIJDELIJK)
					Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					{
						$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
						$message->to('jbooiman@horecapersoneel.biz', 'Jan Booiman')
							->subject('SPOED!! Horecapersoneel aanmelding');
					});

					// Stuur kopie van email naar Digitus Marketing met SPOED!
					Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					{
						$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
						$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
							->subject('SPOED!! Horecapersoneel aanmelding KOPIE');
					});
				} else {

					// Stuur email naar horecapersoneel met aanvraag!
					Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					{
						$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
						$message->to('info@horecapersoneel.biz', 'Horeca Personeel')
							->subject('Horecapersoneel aanmelding');
					});
					// Stuur email naar jan booiman (TIJDELIJK) met aanvraag!
					Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					{
						$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
						$message->to('jbooiman@horecapersoneel.biz', 'Jan Booiman')
							->subject('Horecapersoneel aanmelding');
					});

					// Stuur voor de zekerheid een 'kopie' naar Digitus Marketing
					Mail::send('includes.email.tab-app.horecapersoneel', $data, function($message) use($data)
					{
						$message->from($data['email'], $data['voornaam']. ' ' .$data['achternaam']);
						$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
							->subject('Horecapersoneel aanmelding KOPIE');
					});

				}

				// Stuur de aanvrager een bevestigingsmail dat de aanvraag in goede orde is ontvangen
				Mail::send('includes.email.tab-app.bevestiging-aanmelding', $data, function($message) use($data)
				{
					$message->from('info@horecapersoneel.biz', 'Horeca Personeel');
					$message->to($data['email'], $data['voornaam']. ' ' .$data['achternaam'])
						->subject('Bevestiging van jouw aanmelding!');
				});

			}

		}


		return $response;
	}

	public function hartForHer()
	{
		$apicode = Config::get('realtimeapicode.hartforher');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });

				Mail::send('includes.email.tab-app.hartforher', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('caro@hartforher.nl', 'Hart for her Culemborg')
						->subject('Hart for Her Aanmelding');
				});
				Mail::send('includes.email.tab-app.hartforher', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Hart for Her Culemborg Aanmelding');
				});

			}

		}


		return $response;
	}

	public function praktijkernabasten()
	{
		$apicode = Config::get('realtimeapicode.praktijkernabasten');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				Mail::send('includes.email.tab-app.ernabasten', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('info@praktijkernabasten.nl', 'Praktijk Erna Basten')
						->subject('Aanmelding Praktijk Erna Basten');
				});
				Mail::send('includes.email.tab-app.ernabasten', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Praktijk Erna Basten Aanmelding');
				});

			}

		}


		return $response;
	}

	public function hartForHerAmsterdamOost()
	{
		$apicode = Config::get('realtimeapicode.hartforheramsterdamoost');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });

				Mail::send('includes.email.tab-app.hartforher', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('elly@hartforher.nl', 'Hart for her Amsterdam Oost')
						->subject('Hart for Her Amsterdam Oost Aanmelding');
				});
				Mail::send('includes.email.tab-app.hartforher', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Hart for Her Amsterdam Oost Aanmelding');
				});

			}

		}


		return $response;
	}

	public function theUnit()
	{
		$apicode = Config::get('realtimeapicode.theunit');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				Mail::send('includes.email.tab-app.theunit', $data, function($message) use($data)
				{
					$message->from('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing');
					$message->to('annebartdevries@gmail.com', 'Anne Bart de Vries | The Unit')
						->subject('The Unit Aanmelding');
				});
				Mail::send('includes.email.tab-app.theunit', $data, function($message) use($data)
				{
					$message->from('info@digitusmarketing.nl', 'Digitus Marketing');
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('The Unit Aanmelding');
				});

				// Stuur de aanvrager een bevestigingsmail dat de aanvraag in goede orde is ontvangen
				Mail::send('includes.email.tab-app.bevestiging-aanmelding', $data, function($message) use($data)
				{
					$message->from('info@theunitsc.nl', 'The Unit');
					$message->to($data['email'], $data['naam'])
						->subject('Bevestiging van jouw aanmelding!');
				});

			}

		}


		return $response;
	}

	public function burningHeart()
	{
		$apicode = Config::get('realtimeapicode.burningheart');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');

	
		if(!empty($entries))
		{
			// Pak sportschool Burning Heart
			$sportschool = Sportschool::find(1);

			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				if($sportschool)
				{
					$sportschool->aanmeldingen = $sportschool->aanmeldingen + 1;
					$sportschool->laatste_aanmelding = Carbon::now();
					$sportschool->save();
				}

				Mail::send('includes.email.tab-app.burningheart', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('info@burning-heart.nl', 'Sportschool Burning Heart')
						->subject('Burning Heart Aanmelding');
				});
				Mail::send('includes.email.tab-app.burningheart', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Burning Heart Aanmelding');
				});

			}

		}


		return $response;
	}

	public function oneFitnessWeesp()
	{
		$apicode = Config::get('realtimeapicode.onefitnessweesp');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');

	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				Mail::send('includes.email.tab-app.onefitnessweesp', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('weesp@onefitness.nl', 'One Fitness Weesp')
						->subject('One Fitness Weesp Aanmelding');
				});
				Mail::send('includes.email.tab-app.onefitnessweesp', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('One Fitness Weesp Aanmelding');
				});

			}

		}


		return $response;
	}

	public function judithsDancePoint()
	{

		$apicode = Config::get('realtimeapicode.judithdancepoint');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
					'wanneer'		=> $entry->wanneer,
					'tabnaam'		=> $entry->tabnaam
				);

				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });

				// Stuur bevestiging van aanmelding naar sportschool
				Mail::send('includes.email.tab-app.judithdancepoint', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('info@danseninweert.nl', 'Dansen in Weert')
						->subject('Judith`s Dance Point Aanmelding voor: '. $data['tabnaam']);
				});

				// Stuur voor de zekerheid een 'kopie' naar Digitus Marketing
				Mail::send('includes.email.tab-app.judithdancepoint', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Judith`s Dance Point Aanmelding voor: '. $data['tabnaam']);
				});

				// Stuur de aanvrager een bevestigingsmail dat de aanvraag in goede orde is ontvangen
				Mail::send('includes.email.tab-app.bevestiging-aanmelding', $data, function($message) use($data)
				{
					$message->from('info@danseninweert.nl', 'Dansen in Weert');
					$message->to($data['email'], $data['naam'])
						->subject('Bevestiging van jouw aanmelding!');
				});

			}

		}


		return $response;
	}

	public function danscentrumLaPasse()
	{

		$apicode = Config::get('realtimeapicode.danscentrumlapasse');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
					'wanneer'		=> $entry->wanneer,
					'tabnaam'		=> $entry->tabnaam
				);

				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });

				Mail::send('includes.email.tab-app.judithdancepoint', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('lapasse@gmail.com', 'Danscentrum La Passe')
						->subject('Danscentrum LaPasse Aanmelding voor: '. $data['tabnaam']);
				});
				Mail::send('includes.email.tab-app.judithdancepoint', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Danscentrum LaPasse Aanmelding voor: '. $data['tabnaam']);
				});

			}

		}


		return $response;
	}

	public function totalExercise()
	{

		$apicode = Config::get('realtimeapicode.totalexercise');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');

	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				Mail::send('includes.email.tab-app.burningheart', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('info@totalexercise.nl', 'Total Exercise')
						->subject('Total Exercise Aanmelding');
				});
				Mail::send('includes.email.tab-app.burningheart', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Total Exercise Aanmelding');
				});

			}

		}


		return $response;
	}

	public function sportZenter()
	{

		$apicode = Config::get('realtimeapicode.sportzenter');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'naam'			=> $entry->naam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });

				Mail::send('includes.email.tab-app.sportzenter', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('info@sportzenter.nl', 'SportZenter Resilience')
						->subject('SportZenter Aanmelding');
				});
				Mail::send('includes.email.tab-app.sportzenter', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['naam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('SportZenter Aanmelding');
				});

			}

		}


		return $response;
	}

	public function healthclubJulien()
	{
		$apicode = Config::get('realtimeapicode.julienapi');

		$response = Response::make(null, 200);
		 
		$response->header('realtimeapi',$apicode);

		// Log::info(Input::all());

		$entries = Input::get('entries');
	
		if(!empty($entries))
		{
			$entriess = json_decode($entries);

			foreach($entriess as $entry)
			{
				$data = array(
					'voornaam'		=> $entry->voornaam,
					'achternaam'	=> $entry->achternaam,
					'email'			=> $entry->email,
					'telefoon'		=> $entry->telefoon,
				);

				// Mail::send('includes.email.tab-app.maartenvazquez', $data, function($message) use($data)
				// {
				// 	$message->from($data['email'], $data['voornaam'] .' '. $data['achternaam']);
				// 	$message->to('maarten@maartenvazquez.nl', 'Maarten Vazquez Creatiestudio')
				// 		->subject('Maarten Vazquez Tab-app Actie');
				// });

				// Mail naar clubplanner
				Mail::send('includes.email.tab-app.julien-clubplanner', $data, function($message) use ($data)
				{
					$message->from('aanvragen@digitusmarketing.nl', 'Digitus Marketing');
					// $message->to('prospects-healthclub-julien@clubplanner.nl', 'Prospects Healthclub Julien')
					// 	->subject('Healthclub Julien Facebook tab-app prospect');
					$message->to('prospects-healthclub-julien@clubplanner.nl', 'Prospects Healthclub Julien')
						->subject('Facebook App Prospect');
				});

				// Mail naar klant met gegevens van geinteresseerde
				Mail::send('includes.email.tab-app.julien', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['voornaam']);
					$message->to('info@healthclubjulien.nl', 'Healthclub Julien')
						->subject('Healthclub Julien Aanmelding');
				});
				Mail::send('includes.email.tab-app.julien', $data, function($message) use($data)
				{
					$message->from($data['email'], $data['voornaam']);
					$message->to('aanmeldingen@digitusmarketing.nl', 'Digitus Marketing')
						->subject('Healthclub Julien Aanmelding');
				});

				// Maak nieuwe relatie
				$client = new \SoapClient('https://api.repper.nl/soap/1.1/RepperService.svc', array('soap_version' => SOAP_1_2));

				$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://api.repper.nl/soap/1.1/createRelation');
				$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://api.repper.nl/soap/1.1/RepperService.svc', 1);

				$client->__setSoapHeaders($actionHeader);

				$apikey = '1a4d8cadcee34acb88c5ff7c68d11a65'; 
				$emailAddress = $data['email'] ;
				$firstName = $data['voornaam']; 
				$lastName = $data['achternaam']; 

				$createRelation = $client->CreateRelation(array('apikey' => $apikey, 'emailAddress' => $emailAddress, 'firstName' => $firstName, 'lastName' => $lastName));

				$this->repperApiStapTwee($emailAddress);

			}

		}


		return $response;
	}

	public function repperApi($data)
	{
		// Maak nieuwe relatie
		$client = new \SoapClient('https://api.repper.nl/soap/1.1/RepperService.svc', array('soap_version' => SOAP_1_2));

		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://api.repper.nl/soap/1.1/createRelation');
		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://api.repper.nl/soap/1.1/RepperService.svc', 1);

		$client->__setSoapHeaders($actionHeader);

		$apikey = '1a4d8cadcee34acb88c5ff7c68d11a65'; 
		$emailAddress = $data->email; 
		$firstName = $data->voornaam; 
		$lastName = $data->achternaam; 

		$createRelation = $client->CreateRelation(array('apikey' => $apikey, 'emailAddress' => $emailAddress, 'firstName' => $firstName, 'lastName' => $lastName));

		$this->repperApiStapTwee($emailAddress);
	}

	public function repperApiStapTwee($email)
	{
		// Pak relatieID
		$clients = new \SoapClient('https://api.repper.nl/soap/1.1/repperservice.svc', array('soap_version' => SOAP_1_2));

		$actionsHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://api.repper.nl/soap/1.1/getRelationByEmailAddress');
		$actionsHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://api.repper.nl/soap/1.1/RepperService.svc', 1);

		$clients->__setSoapHeaders($actionsHeader);

		$apikey = '1a4d8cadcee34acb88c5ff7c68d11a65'; 
		$emailAddress = $email; 

		$result = $clients->GetRelationByEmailAddress(array('apikey' => $apikey, 'emailAddress' => $emailAddress));
		$xml = simplexml_load_string($result->GetRelationByEmailAddressResult->payload->any);
		$relationID = (string)$xml->attributes()->id;
		header('Content-type: text/xml');
		// var_dump($xml->asXML());

		$this->repperApiStapDrie($relationID);
	}

	public function repperApiStapDrie($relationID)
	{
		// Voeg relatie toe aan lijst Nieuwsbrief Facebook App
		$client = new \SoapClient('https://api.repper.nl/soap/1.1/repperservice.svc', array('soap_version' => SOAP_1_2));

		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://api.repper.nl/soap/1.1/addRelationChannelSubscription');
		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://api.repper.nl/soap/1.1/RepperService.svc', 1);

		$client->__setSoapHeaders($actionHeader);
	
		$apikey = '1a4d8cadcee34acb88c5ff7c68d11a65'; 
		$relationID = $relationID; 
		$channelID = 5052; 
		$newSubscription = false; // Geen eventacties activeren

		$client->AddRelationChannelSubscription(array('apikey' => $apikey, 'relationID' => $relationID, 'channelID' => $channelID, 'newSubscription' => $newSubscription));

		$this->repperApiStapVier($relationID);
	}

	public function repperApiStapVier($relationID)
	{
		// Voeg relatie toe aan lijst Nieuwsbrief Algemeen
		$client = new \SoapClient('https://api.repper.nl/soap/1.1/repperservice.svc', array('soap_version' => SOAP_1_2));

		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://api.repper.nl/soap/1.1/addRelationChannelSubscription');
		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://api.repper.nl/soap/1.1/RepperService.svc', 1);

		$client->__setSoapHeaders($actionHeader);
	
		$apikey = '1a4d8cadcee34acb88c5ff7c68d11a65'; 
		$relationID = $relationID; 
		$channelID = 3816; 
		$newSubscription = false; // Geen eventacties activeren

		$client->AddRelationChannelSubscription(array('apikey' => $apikey, 'relationID' => $relationID, 'channelID' => $channelID, 'newSubscription' => $newSubscription));

		$this->repperApiStapVijf($relationID);
	}

	public function repperApiStapVijf($relationID)
	{
		// Wijzig eigenschap 'Facebook App' van relatie naar 'Facebook'
		$client = new \SoapClient('https://api.repper.nl/soap/1.1/repperservice.svc', array('soap_version' => SOAP_1_2));

		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'Action', 'http://api.repper.nl/soap/1.1/editRelationCustomField');
		$actionHeader[] = new \SoapHeader('http://www.w3.org/2005/08/addressing', 'To', 'https://api.repper.nl/soap/1.1/RepperService.svc', 1);

		$client->__setSoapHeaders($actionHeader);

		$apikey = '1a4d8cadcee34acb88c5ff7c68d11a65'; 
		$relationID = $relationID; 
		$fieldID = 7572; // Eigen eigenschap met ID 7572 wijzigen
		$value = 'Facebook'; 

		$client->EditRelationCustomField(array('apikey' => $apikey, 'relationID' => $relationID, 'fieldID' => $fieldID, 'value' => $value));
	}

}