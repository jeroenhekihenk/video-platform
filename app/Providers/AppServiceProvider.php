<?php namespace App\Providers;

use App\Dienst;
use App\Recensie;
use App\Post;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer(['includes.footer.mainfooter','includes.snellepage'], function($view)
		{
			$view->with('diensten', Dienst::all());
		});

		view()->composer('includes.personen', function($view)
		{
			$view->with('users', User::where('role_id','1')->take(3)->get());
		});

		view()->composer('includes.recensies.klanten', function($view)
		{
			$view->with('recensies', Recensie::where('uitgelicht','1')->get());
		});
		
		view()->composer('includes.sidebar.groot', function($view)
		{
			$view->with('posts', Post::latest('published_at')->published()->get()->take(5));
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
			'App\Services\Registrar'
		);
	}

}
