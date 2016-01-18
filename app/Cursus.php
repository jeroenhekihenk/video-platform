<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursus extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cursussen';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['afbeelding', 'naam', 'slug', 'content'];

	public function videos()
	{
		return $this->belongsToMany('App\Video');
	}

	public function hoofdstukken()
	{
		return $this->hasMany('App\Hoofdstuk');
	}

	public function users()
	{
		return $this->belongsToMany('App\User');
	}

	public function getUitgelichtHoofdstuk()
	{
		$hoofdstuk_id = $this->uitgelicht_hoofdstuk_id;
		return $this->hoofdstukken->find($hoofdstuk_id);
	}

	public function getUitgelichteVideo()
	{
		if($this->uitgelicht_hoofdstuk_id != '' || $this->uitgelicht_hoofdstuk_id != null){
			$hoofdstuk_id = $this->uitgelicht_hoofdstuk_id;
			$video_id = $this->uitgelicht_video_id;
			return $this->hoofdstukken->find($hoofdstuk_id)->videos->find($video_id);
		}
	}

}