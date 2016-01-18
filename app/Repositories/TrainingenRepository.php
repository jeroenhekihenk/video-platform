<?php namespace App\Repositories;

use App\Training;

class TrainingenRepository {

	public function getAll()
	{
		return Training::all();
	}

	public function findOrFail($id)
	{
		return Training::findOrFail($id);
	}

	public function restore($id)
	{
		return Training::where('id', $id)->withTrashed()->firstOrFail();
	}

	public function forceDelete($id)
	{
		return Training::withTrashed()->where('id', $id);
	}

}