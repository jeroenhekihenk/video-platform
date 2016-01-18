<?php namespace App\Repositories;

use App\Plan;

class PlanRepository {

	public function getAllPlans()
	{
		return Plan::all();
	}

	public function findOrFail($id)
	{
		return Plan::findOrFail($id);
	}

	public function getList()
	{
		return Plan::lists('naam','id');
	}

}