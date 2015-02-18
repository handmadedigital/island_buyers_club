<?php namespace TGL\Core\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'TGL\Auth\Events\UserWasRegistered' => [
			'TGL\Auth\Listeners\EmailWelcomeUser',
			'TGL\Auth\Listeners\EmailAdminUser',
		],
		'TGL\Auth\Events\UserWasLoggedIn' => [
			'TGL\Auth\Listeners\LogCounter',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		//
	}

}
