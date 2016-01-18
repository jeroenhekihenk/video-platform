<?php namespace App\Repositories;

use App\Dienst;

class DienstenRepository {

	public function getAll()
	{
		return Dienst::all();
	}

	public function getDienst($slug)
	{
		return Dienst::where('label','dienst')->where('slug', $slug)->first();
	}

	public function getTraining($slug)
	{
		return Dienst::where('label','training')->where('slug',$slug)->first();
	}

	public function findOrFail($id)
	{
		return Dienst::findOrFail($id);
	}

	public function byLabel($val)
	{
		return Dienst::where('label',$val)->get();
	}

	public function getCasesList()
	{
		return Dienst::lists('titel','id');
	}

}