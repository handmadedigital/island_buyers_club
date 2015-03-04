<?php namespace TGL\Packages\CommandBus\Contracts;

interface CommandBus
{
    public function execute($command);
}