<?php

$router->get('/{user_slug}/order/{order_number}/details', ['as' => 'orders', 'uses' => 'Shop\Orders\Http\Controllers\OrderController@getOrder']);
$router->get('/{user_slug}/orders', ['as' => 'orders', 'uses' => 'Shop\Orders\Http\Controllers\OrderController@getUserOrders']);
$router->post('/order/add', ['as' => 'add.order', 'uses' => 'Shop\Orders\Http\Controllers\OrderController@postAddOrder']);