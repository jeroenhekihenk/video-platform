<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categorieen';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['naam'];

	public function posts()
	{
		return $this->hasMany('App\Post');
	}

	public function cases()
	{
		return $this->hasMany('App\Zaak');
	}

}