<?php namespace App\Repositories;

use App\Role;

class RollenRepository {

	public function getAllRollen()
	{
		return Role::all();
	}

	public function getList()
	{
		return Role::lists('naam','id');
	}

}