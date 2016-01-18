<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table = 'orders';
	protected $fillable = ['transaction_id','status','bedrag','betaalmethode','betaling_datum', 'order_id', 'user_id', 'pakket_id', 'cursus_id'];

	public function users()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

}