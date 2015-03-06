<?php namespace TGL\Shop\Orders\Listeners;

use TGL\Packages\Events\Contracts\Listener;

class SendAdminOrderWasPlacedEmail implements Listener{

    public function handle($event)
    {
        var_dump('hey massn!');
    }
}