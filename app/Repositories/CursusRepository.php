<?php namespace App\Repositories;

use App\Cursus;

class CursusRepository {

	public function getAllCursussen()
	{
		return Cursus::all();
	}

	public function findOrFail($id)
	{
		return Cursus::findOrFail($id);
	}

	public function getList()
	{
		return Cursus::lists('naam','id');
	}

	public function getAllCursussenDesc()
	{
		return Cursus::all()->sortByDesc('id');
	}

}