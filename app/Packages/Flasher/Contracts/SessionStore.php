<?php namespace TGL\Packages\Flasher\Contracts;


interface SessionStore
{
    public function flash($name, $data);
}