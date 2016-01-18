<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\SnellePage;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('includes.footer.mainfooter', function($view)
		{
			$view->with('snellepages', SnellePage::all());
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
