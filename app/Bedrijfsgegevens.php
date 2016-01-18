<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bedrijfsgegevens extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bedrijfsgegevens';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['bedrijfsnaam', 'aanhef', 'adres', 'postcode', 'mobiel', 'telefoonnummer', 'woonplaats', 'land', 'user_id'];

	public function user()
	{
		return $this->belongsToMany('App\User', 'user_id');
	}

}
