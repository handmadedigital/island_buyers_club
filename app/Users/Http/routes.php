<?php

$router->get('/dashboard/{username}', ['as' => 'user.dashboard', 'uses' => 'Users\Http\Controllers\UserController@getDashboard']);