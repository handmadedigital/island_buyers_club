<?php

$router->get('/{username}/container', ['as' => 'container', 'uses' => 'Shop\Container\Http\Controllers\ContainerController@getContainer']);
$router->post('/container/add-to-container', ['as' => 'add.container', 'uses' => 'Shop\Container\Http\Controllers\ContainerController@postAddToContainer']);