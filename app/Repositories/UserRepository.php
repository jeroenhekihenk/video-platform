<?php namespace App\Repositories;

use App\User;
use Carbon\Carbon;

class UserRepository {

	public function getAllUsers()
	{
		return User::all();
	}

	public function getUser($id)
	{
		return User::find($id);
	}

	public function findOrFail($id)
	{
		return User::findOrFail($id);
	}

	public function getAllAdministrators()
	{
		return User::where('role_id','1')->get();
	}

	public function getAllMembers()
	{
		return User::where('role_id','2')->orderBy('klantnummer', 'desc')->get();
	}

	public function getWebinars()
	{
		return User::where('role_id','4')->get();
	}

	public function getAllGratisDemo()
	{
		return User::where('role_id','2')->where('plan','gratis-demo')->get();
	}

	public function isAdministrator($id)
	{
		$user = User::find($id);
		if($user->role_id == '1')
		{

		}
	}

}