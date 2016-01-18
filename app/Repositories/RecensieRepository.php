<?php namespace App\Repositories;

use App\Recensie;

class RecensieRepository {

	public function getAllRecensies()
	{
		return Recensie::all();
	}

	public function findOrFail($id)
	{
		return Recensie::findOrFail($id);
	}

}