<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Productrecensie extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'productrecensies';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['naam', 'content', 'image'];

	public function salespage()
	{
		return $this->belongsToMany('App\Salespage');
	}

}