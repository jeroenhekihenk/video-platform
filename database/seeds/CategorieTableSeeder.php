<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categorie;

class CategorieTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categorieen')->delete();
		Categorie::create([
			'naam'	=> 'Facebook'
		]);
		Categorie::create([
			'naam'	=> 'Facebook Campagne'
		]);
		Categorie::create([
			'naam'	=> 'Facebook Tabapp'
		]);
	}

}
