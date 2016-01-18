<?php namespace App\Repositories;

use App\Ebook;

class EbookRepository {

	public function getAll()
	{
		return Ebook::all();
	}

	public function getAllWithTrashed()
	{
		return Ebook::withTrashed()->get();
	}

	public function getEbook($id)
	{
		return Ebook::where('id', $id)->first();
	}

	public function restore($id)
	{
		return Ebook::where('id', $id)->withTrashed()->firstOrFail();
	}

	public function forceDelete($id)
	{
		return Ebook::withTrashed()->where('id', $id);
	}

	public function findOrFail($id)
	{
		return Ebook::findOrFail($id);
	}

}