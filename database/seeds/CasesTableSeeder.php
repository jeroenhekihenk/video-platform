<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Zaak;

class CasesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('cases')->delete();
		Zaak::create([
			'logo' => 'images/cases/1/suntime-logo.png',
			'uitgelichte_afbeelding' => 'images/cases/1/suntime-uitgelicht.png',
			'titel' => 'Eerste paasdag gesloten',
			'slug' => 'suntime-zonnestudio-eerste-paasdag-gesloten',
			'klant' => 'Suntime Zonnestudio',
			'link_klant' => 'http://www.suntimezonnestudio.nl',
			'link_project' => 'https://www.facebook.com/SuntimeZonnestudio/photos/a.467652273251863.125595.456341021049655/1078662225484195/?type=1&theater',
			'categorie_id' => '2',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
		]);
		Zaak::create([
			'logo' => 'images/cases/1/suntime-logo.png',
			'uitgelichte_afbeelding' => 'images/cases/1/suntime-uitgelicht.png',
			'titel' => 'Eerste paasdag gesloten deel2',
			'slug' => 'suntime-zonnestudio-eerste-paasdag-gesloten',
			'klant' => 'Suntime Zonnestudio',
			'link_klant' => 'http://www.suntimezonnestudio.nl',
			'link_project' => 'https://www.facebook.com/SuntimeZonnestudio/photos/a.467652273251863.125595.456341021049655/1078662225484195/?type=1&theater',
			'categorie_id' => '2',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
		]);
	}

}
