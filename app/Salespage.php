<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salespage extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'salespages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titel', 'slogan', 'intro_titel', 'into_tekst'];

	public function producten()
	{
		return $this->belongsToMany('App\Product');
	}

	public function recensies()
	{
		return $this->belongsToMany('App\Productrecensie');
	}

}