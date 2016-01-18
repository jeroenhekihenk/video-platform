<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		User::create([
			'voornaam'		=> 'Jeroen',
			'achternaam'	=> 'Venderbosch',
			'email'			=> 'jeroen@digitusmarketing.nl',
			'afbeelding'	=> 'images/users/jeroen.png',
			'over'			=> 'Jeroen Venderbosch is een leergierige internet marketeer met passie voor techniek. Hij werkt internet marketing concepten uit, meet en optimaliseert de resultaten',
			'facebook'		=> 'https://www.facebook.com/Jvenderbosch',
			'twitter'		=> '#',
			'googleplus'	=> '#',
			'linkedin'		=> 'https://nl.linkedin.com/in/jeroenvendb'
		]);
		User::create([
			'voornaam'		=> 'Parsifal',
			'achternaam'	=> 'Tritsch',
			'email'			=> 'parsifal@digitusmarketing.nl',
			'afbeelding'	=> 'images/users/parsifal.png',
			'over'			=> 'JParsifal Tritsch bedenkt concepten en social media strategieën, hij schrijft dagelijks content voor bedrijven en onderhoudt verschillende Facebook campagnes.',
			'facebook'		=> 'https://www.facebook.com/parsifal.tritsch',
			'twitter'		=> '#',
			'googleplus'	=> '#',
			'linkedin'		=> 'https://www.linkedin.com/pub/parsifal-tritsch/2a/668/597/nl'
		]);
	}

}
