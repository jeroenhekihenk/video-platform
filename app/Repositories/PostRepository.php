<?php namespace App\Repositories;

use App\Post;
use Carbon\Carbon;

class PostRepository {

	public function getAllPosts()
	{
		return Post::all();
	}

	public function getAllLatestPosts()
	{
		return Post::latest('published_at')->get();
	}

	public function paginateSix()
	{
		return Post::latest('published_at')->published()->simplePaginate(6);
	}

	public function getPost($slug)
	{
		return Post::where('slug',$slug)->published()->first();
	}

	public function getAdminPost($slug)
	{
		return Post::where('slug',$slug)->first();
	}

	public function byCat($cat)
	{
		return Post::latest('published_at')->published()->where('categorie_id',$cat)->take(3)->get();
	}

	public function findOrFail($id)
	{
		return Post::findOrFail($id);
	}

}