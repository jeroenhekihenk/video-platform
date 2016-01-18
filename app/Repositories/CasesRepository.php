<?php namespace App\Repositories;

use App\Zaak;

class CasesRepository {

	public function getAll()
	{
		return Zaak::orderBy('created_at', 'DESC')->get();
	}

	public function getCase($slug)
	{
		return Zaak::where('slug',$slug)->first();
	}

	public function findOrFail($id)
	{
		return Zaak::findOrFail($id);
	}

}