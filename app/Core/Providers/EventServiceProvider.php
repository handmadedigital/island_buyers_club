<?php namespace TGL\Core\Providers;

use Illuminate\Support\ServiceProvider;
use TGL\Packages\Events\Dispatcher;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        'TGL.Shop.Orders.Events.OrderWasPlaced' => [
            'TGL\Shop\Orders\Listeners\SendAdminOrderWasPlacedEmail',
            'TGL\Shop\Orders\Listeners\SendUserOrderWasPlacedEmail',
        ]
    ];

    public function register()
    {

    }

    /**
     * @param Dispatcher $event
     */
    public function boot(Dispatcher $event)
    {
        foreach($this->listen as $event_name => $listeners)
        {
            foreach($listeners as $listener)
            {
                $event->assignListener($event_name, new $listener);
            }
        }
    }
}