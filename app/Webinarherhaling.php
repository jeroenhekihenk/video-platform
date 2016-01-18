<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Webinarherhaling extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'webinarherhalingen';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['vimeo_link', 'herhaling_start_tijd', 'herhaling_eind_tijd'];

	public function webinars()
	{
		return $this->belongsToMany('App\Webinar');
	}

	public function deDatum()
	{
		$a = date('l d-m-y', strtotime($this->herhaling_start_tijd));
		$henk = explode(' ',$a);

		if($henk[0] == 'Monday')
		{
			$henk[0] = 'Maandag';
		} elseif($henk[0] == 'Tuesday')
		{
			$henk[0] = 'Dinsdag';
		} elseif($henk[0] == 'Wednesday')
		{
			$henk[0] = 'Woensdag';
		} elseif($henk[0] == 'Thursday')
		{
			$henk[0] = 'Donderdag';
		} elseif($henk[0] == 'Friday')
		{
			$henk[0] = 'Vrijdag';
		} elseif($henk[0] == 'Saturday')
		{
			$henk[0] = 'Zaterdag';
		} elseif($henk[0] == 'Sunday')
		{
			$henk[0] = 'Zondag';
		}
		$gebruikendatum = $henk[0]. ' ' .$henk[1];

		return $gebruikendatum;
	}

	public function deTijd()
	{
		$a = date('H:i', strtotime($this->herhaling_start_tijd));
		return $a;
	}

}