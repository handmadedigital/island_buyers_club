<?php

$router->get('/', ['as' => 'home', 'uses' => 'Pages\Http\Controllers\PagesController@getHome']);
$router->get('/{username}/feedback', ['as' => 'feedback', 'uses' => 'Pages\Http\Controllers\PagesController@getFeedback']);