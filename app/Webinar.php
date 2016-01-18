<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Webinar extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'webinars';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titel', 'slug', 'welkom_titel', 'welkomst_tekst', 'youtube_live_url', 'chat_titel', 'chat_tekst', 'chat_url', 'webinar_start_tijd', 'webinar_eind_tijd'];

	public function attendees()
	{
		return $this->belongsToMany('App\Attendee');
	}

	public function producten()
	{
		return $this->belongsToMany('App\Product');
	}

	public function webinarform()
	{
		return $this->belongsToMany('App\Webinarform');
	}

	public function webinarkalender()
	{
		return $this->belongsToMany('App\Webinarkalender');
	}

	public function webinarherhaling()
	{
		return $this->belongsToMany('App\Webinarherhaling');
	}

	public function webinarrecensies()
	{
		return $this->belongsToMany('App\Webinarrecensie');
	}

	public function deDatum()
	{
		$a = date('l d-m-y', strtotime($this->webinar_start_tijd));
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

	public function datumDagMaand()
	{
		$a = date('l j F', strtotime($this->webinar_start_tijd));
		$henk = explode(' ', $a);

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

		if($henk[2] == 'January')
			{
				$henk[2] = "Januari";
			} elseif ($henk[2] == 'February')
			{
				$henk[2] = "Februari";
			} elseif ($henk[2] == 'March')
			{
				
				$henk[2] = "Maart";
			} elseif ($henk[2] == 'April')
			{
				$henk[2] = "April";
			} elseif ($henk[2] == 'May')
			{
				$henk[2] = "Mei";
			} elseif ($henk[2] == 'June')
			{
				$henk[2] = "Juni";
			} elseif ($henk[2] == 'July')
			{
				$henk[2] = "Juli";
			} elseif ($henk[2] == 'August')
			{
				$henk[2] = "Augustus";
			} elseif ($henk[2] == 'September')
			{
				$henk[2] = "September";
			} elseif ($henk[2] == 'October')
			{
				$henk[2] = "Oktober";
			} elseif ($henk[2] == 'November')
			{
				$henk[2] = "November";
			} elseif ($henk[2] == 'December')
			{
				$henk[2] = "December";
			}

		$gebruikendatum = $henk[0]. ' ' .$henk[1]. ' ' .$henk[2];

		return $gebruikendatum;
	}

	public function deTijd()
	{
		$a = date('H:i', strtotime($this->webinar_start_tijd));
		return $a;
	}

	public function countdownTijd()
	{
		$a = date('Y/m/d H:i:s', strtotime($this->webinar_start_tijd));
		return $a;
	}

}