<?php namespace App\Providers;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\ServiceProvider;

class MemberServiceProvider extends ServiceProvider {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Guard $auth)
	{
		view()->composer(['includes.member.menus.user', 'includes.member.header.nav', 'includes.member.menus.mainmenu'], function($view)
		{
			$view->with('member', \Auth::user());
		});
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar',
			'App\Repositories\RollenRepository'
		);
	}

}
