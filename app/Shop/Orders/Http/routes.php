<?php

$router->get('/{username}/order/details', ['as' => 'orders', 'uses' => 'Shop\Orders\Http\Controllers\OrderController@getOrder']);
$router->get('/{username}/orders', ['as' => 'orders', 'uses' => 'Shop\Orders\Http\Controllers\OrderController@getOrders']);