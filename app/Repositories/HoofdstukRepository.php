<?php namespace App\Repositories;

use App\Hoofdstuk;

class HoofdstukRepository {

	public function getAllHoofdstukken()
	{
		return Hoofdstuk::all();
	}

	public function getList()
	{
		return Hoofdstuk::lists('naam','id');
	}

	public function findOrFail($id)
	{
		return Hoofdstuk::findOrFail($id);
	}

}