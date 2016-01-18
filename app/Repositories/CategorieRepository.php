<?php namespace App\Repositories;

use App\Categorie;

class CategorieRepository {

	public function getAll()
	{
		return Categorie::all();
	}

	public function findOrFail($id)
	{
		return Categorie::findOrFail($id);
	}

}