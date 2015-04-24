<?php

$router->get('/products/{category_slug}', ['as' => 'product.category', 'uses' => 'Shop\Categories\Http\Controllers\CategoryController@getProductCategory']);
$router->get('/categories', ['as' => 'categories', 'uses' => 'Shop\Categories\Http\Controllers\CategoryController@getCategories']);