<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;

class PostSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('posts')->delete();
		Post::create([
			'titel'						=> 'Facebook-update: "sell something"',
			'content'					=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'slug'						=> 'facebook-update-sell-something',
			'user_id'					=> '1',
			'categorie_id'				=> '1',
			'uitgelichte_afbeelding'	=> '/images/blogposts/Facebook ik wil dit niet zien.png',
			'published_at'				=> '2015-3-16',
		]);
		Post::create([
			'titel'						=> 'Facebook-test: "koop nu"',
			'content'					=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'slug'						=> 'facebook-test-koop-nu',
			'user_id'					=> '1',
			'categorie_id'				=> '1',
			'uitgelichte_afbeelding'	=> '/images/blogposts/valkuil.png',
			'published_at'				=> '2015-3-17',
		]);
		Post::create([
			'titel'						=> 'Whatsapp op je computer?',
			'content'					=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'slug'						=> 'whatsapp-op-je-computer',
			'user_id'					=> '1',
			'categorie_id'				=> '2',
			'uitgelichte_afbeelding'	=> '/images/blogposts/Facebook ik wil dit niet zien.png',
			'published_at'				=> '2015-3-17',
		]);
		Post::create([
			'titel'						=> 'Facebook-update: "call to action"',
			'content'					=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'slug'						=> 'facebook-update-call-to-action',
			'user_id'					=> '1',
			'categorie_id'				=> '1',
			'uitgelichte_afbeelding'	=> '/images/blogposts/Facebook ik wil dit niet zien.png',
			'published_at'				=> '2015-3-18',
		]);
		Post::create([
			'titel'						=> 'Voorbereiding Facebook Marketing',
			'content'					=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'slug'						=> 'voorbereiding-facebook-marketing',
			'user_id'					=> '1',
			'categorie_id'				=> '3',
			'uitgelichte_afbeelding'	=> '/images/blogposts/valkuil.png',
			'published_at'				=> '2015-3-18',
		]);
	}

}
