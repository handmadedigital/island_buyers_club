<?php namespace TGL\Packages\Events;

use TGL\Packages\Events\Contracts\Event;
use TGL\Packages\Events\Contracts\Listener;

class Dispatcher
{
    /**
     * List of listeners registered
     * with the event
     *
     * @var array
     */
    protected $listeners = [];

    public function addListener($name, Listener $listener)
    {
        $this->listeners[$name][] = $listener;
    }

    public function hasListeners($name)
    {
        return isset($this->listeners[$name]);
    }

    public function getListeners($name)
    {
        if ( ! $this->hasListeners($name)) {
            return [];
        }
        return $this->listeners[$name];
    }

    public function dispatch(Event $event)
    {

    }
}