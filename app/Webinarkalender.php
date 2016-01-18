<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Webinarkalender extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'webinarkalenders';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titel', 'content', 'kalender_titel', 'ical', 'outlook', 'google_calendar'];

	public function webinars()
	{
		return $this->belongsToMany('App\Webinar');
	}

}