<?php

$router->get('/{username}/container', ['as' => 'container', 'uses' => 'Shop\Container\Http\Controllers\ContainerController@getContainer']);