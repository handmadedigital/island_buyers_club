<?php namespace TGL\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'TGL';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		//
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Core/Http/routes.php');
			require app_path('Shop/Products/Http/routes.php');
			require app_path('Shop/Categories/Http/routes.php');
			require app_path('Shop/Container/Http/routes.php');
			require app_path('Shop/Orders/Http/routes.php');
			require app_path('Auth/Http/routes.php');
			require app_path('Users/Http/routes.php');
			require app_path('Pages/Http/routes.php');
		});
	}

}
