<?php namespace TGL\Packages\CommandBus\Contracts;


interface CommandTranslator
{
    public function translate($command);
}