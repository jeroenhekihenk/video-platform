<?php namespace App\Repositories;

use App\Image;

class ImagesRepository {

	public function getAllImages()
	{
		return Image::all();
	}

	public function getPaginateAllImages($val)
	{
		return Image::latest()->paginate($val);
	}

	public function findOrFail($id)
	{
		return Image::findOrFail($id);
	}

}