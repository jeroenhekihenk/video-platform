<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ebook extends Model {

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $softDelete = true;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ebooks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'active',
		'naam',
		'slug',
		'slogan_titel',
		'slogan_tekst',
		'image',
		'downloads',
		'pdf',
		'form_link',
		'form_u',
		'form_id',
		'form_token',
		'form_field1',
		'form_field2',
		'form_field3',
		'form_field4',
		'field1_placeholder',
		'field2_placeholder',
		'field3_placeholder',
		'field4_placeholder'
	];

}