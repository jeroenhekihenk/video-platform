<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['voornaam', 'achternaam', 'email', 'password', 'over', 'afbeelding', 'facebook', 'twitter', 'googleplus', 'linkedin', 'role_id', 'benodigd_id', 'benodigdheden', 'plan_id', 'verloopdatum', 'tab_app', 'tab_app_link', 'klantnummer', 'conversiepixel', 'ref'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function getLastLoginAttribute($date)
	{
		return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i');
	}

	public function posts()
	{
		return $this->hasMany('App\Post');
	}

	public function benodigdheid()
	{
		return $this->belongsTo('App\Benodigd', 'benodigd_id');
	}
	
	public function sportschool()
	{
		return $this->belongsTo('App\Sportschool');
	}

	public function cases()
	{
		return $this->hasMany('App\Zaak');
	}

	public function role()
	{
		return $this->belongsTo('App\Role');
	}

	public function plan()
	{
		return $this->belongsTo('App\Plan');
	}

	public function cursussen()
	{
		return $this->belongsToMany('App\Cursus');
	}

	public function heeftCursus($id)
	{
		return $this->cursussen()->where('cursus_id', $id)->count() > 0;
	}

	public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function bedrijfsgegevens()
	{
		return $this->hasMany('App\Bedrijfsgegevens');
	}

	public function rolNaam()
	{
		$rol = $this->role->first();
		return $rol->naam;
	}

}
