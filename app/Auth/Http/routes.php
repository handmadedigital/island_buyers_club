<?php

$router->get('/auth/login', ['as' => 'login', 'uses' => 'Auth\Http\Controllers\AuthController@getLogin']);
$router->post('/auth/login', ['as' => 'login', 'uses' => 'Auth\Http\Controllers\AuthController@postLogin']);
$router->get('/admin/auth/register', ['as' => 'register', 'uses' => 'Auth\Http\Controllers\AuthController@getRegister']);
$router->post('/admin/auth/register', ['as' => 'register', 'uses' => 'Auth\Http\Controllers\AuthController@postRegister']);
$router->get('/auth/logout', ['as' => 'logout', 'uses' => 'Auth\Http\Controllers\AuthController@getLogout']);