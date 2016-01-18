<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoofdstuk extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hoofdstukken';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['naam', 'cursus_id', 'shortname'];

	public function cursussen()
	{
		return $this->belongsToMany('App\Cursus');
	}

	public function videos()
	{
		return $this->hasMany('App\Video');
	}

}