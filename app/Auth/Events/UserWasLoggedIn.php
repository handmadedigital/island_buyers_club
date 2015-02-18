<?php namespace TGL\Auth\Events;

use TGL\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserWasLoggedIn extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
