<?php namespace TGL\Packages\Events\Contracts;

interface Listener
{
    public function handle($event);
}