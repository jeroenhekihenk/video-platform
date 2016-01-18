<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Recensie;

class RecensieTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('recensies')->delete();
		Recensie::create([
			'klantnaam'	=> 'Alex ter H.',
			'content'	=> 'We willen jullie bedanken voor de goede samenwerking en jullie inzet voor Horecapersoneel. Het heeft ons vele nieuwe inschrijvingen opgeleverd.',
			'bedrijf'	=> 'Horecapersoneel.biz',
			'link'		=> 'http://www.horecapersoneel.biz',
		]);
		Recensie::create([
			'klantnaam'	=> 'Gabriel A.',
			'content'	=> 'Een goeie service, prijs, kwaliteit, en bereikbaarheid en dus voor elke ondernemer aan te raden die zijn bedrijf promoten wil. Digitus Marketing een dikke tien!',
			'bedrijf'	=> 'Suntime Zonnestudio',
			'link'		=> 'http://www.suntimezonnestudio.nl',
		]);
		Recensie::create([
			'klantnaam'	=> 'Cultuurcoach Enschede',
			'content'	=> 'Bedankt voor de snelle en duidelijke hulp bij het omzetten van mijn persoonlijke profiel naar een bedrijfspagina!',
			'bedrijf'	=> 'Cultuurcoach Enschede',
			'link'		=> 'https://www.facebook.com/CultuurinEnschede',
		]);
		Recensie::create([
			'klantnaam'	=> 'F. Lie Kie Sang',
			'content'	=> 'Ik heb jullie tips van het e-book stapsgewijs even nagelopen en diverse wijzigingen gemaakt op mijn pagina. Zonder jullie e-book had ik dit niet opgemerkt. Dank je wel voor de uitleg.',
			'bedrijf'	=> 'Duikschool Lie Kie Sang',
			'link'		=> 'https://www.facebook.com/DuikschoolLieKieSang',
		]);
		Recensie::create([
			'klantnaam'	=> 'Mandy S.',
			'content'	=> 'Digitus Marketing heeft mij altijd goed geholpen en geadviseerd over hoe ik dingen het best kan aanpakken op Facebook. Ze staan altijd voor je klaar, zitten vol creativiteit en hebben altijd een oplossing. Ondernemers met passie!',
			'bedrijf'	=> 'Xandi.nl',
			'link'		=> 'http://www.xandi.nl',
		]);

	}

}
