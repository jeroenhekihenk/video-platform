<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'producten';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['naam', 'slug', 'image', 'prijs_normaal', 'prijs_normaal_tot', 'prijs_aanbieding', 'prijs_aanbieding_tot', 'prijs_herhaling', 'prijs_herhaling_tot', 'omschrijving', 'wefact_product_id_normaal', 'wefact_product_id_aanbieding', 'wefact_product_id_herhaling', 'cursus_id', 'plan_id'];

	protected $dates = ['prijs_normaal_tot', 'prijs_aanbieding_tot', 'prijs_herhaling_tot', 'created_at', 'updated_at'];

	public function webinars()
	{
		return $this->belongsToMany('App\Webinar');
	}

	public function modules()
	{
		return $this->belongsToMany('App\Module');
	}

	public function bestelpagina()
	{
		return $this->belongsToMany('App\Bestelpagina');
	}

	public function salespage()
	{
		return $this->belongsToMany('App\Salespage');
	}

}