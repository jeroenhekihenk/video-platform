<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'videos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['link', 'titel', 'plan_id', 'thumbnail', 'hoofdstuk_id', 'tool1_tekst', 'tool1_link', 'tool2_tekst', 'tool2_link', 'tool3_tekst', 'tool3_link', 'tool4_tekst', 'tool4_link'];

	public function hoofdstuk()
	{
		return $this->belongsToMany('App\Hoofdstuk');
	}

	public function plan()
	{
		return $this->belongsTo('App\Plan');
	}

}