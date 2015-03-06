<?php namespace TGL\Shop\Orders\Listeners;

use TGL\Packages\Events\Contracts\Listener;

class SendUserOrderWasPlacedEmail implements Listener{

    public function handle( $event)
    {
        echo 'hey man!';
    }
}