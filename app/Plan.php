<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'plans';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['naam'];

	public function users()
	{
		return $this->hasMany('App\User');
	}

	public function video()
	{
		return $this->hasMany('App\Video');
	}

}