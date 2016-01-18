<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Webinarform extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'webinarforms';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['form_u', 'form_id', 'form_action', 'form_token', 'form_field1', 'form_field2', 'form_field3'];

	public function webinars()
	{
		return $this->belongsToMany('App\Webinar');
	}

}