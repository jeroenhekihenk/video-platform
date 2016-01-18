<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'modules';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titel', 'image', 'punt_1', 'punt_2', 'punt_3', 'punt_4', 'punt_5'];

	public function producten()
	{
		return $this->belongsToMany('App\Product');
	}
}