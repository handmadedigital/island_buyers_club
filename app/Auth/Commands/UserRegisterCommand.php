<?php namespace TGL\Auth\Commands;


class UserRegisterCommand
{
    public $username;
    public $first_name;
    public $last_name;
    public $email;
    public $password;

    function __construct($username, $first_name, $last_name, $email, $password)
    {
        $this->username = $username;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
}