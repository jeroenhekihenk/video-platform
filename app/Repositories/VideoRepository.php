<?php namespace App\Repositories;

use App\Video;

class VideoRepository {

	public function getAllVideos()
	{
		return Video::all();
	}

	public function getPaidVideos()
	{
		return Video::where('plan_id','2')->get();
	}

	public function getFreeVideos()
	{
		return Video::where('plan_id','3')->get();
	}

	public function findOrFail($id)
	{
		return Video::findOrFail($id);
	}

}