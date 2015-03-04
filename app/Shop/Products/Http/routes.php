<?php
$router->group(['prefix' => 'admin'], function($router){
    $router->get('/product/add-product', ['as' => 'add.product', 'uses' => 'Shop\Products\Http\Controllers\ProductController@getAddProduct']);
    $router->post('/product/add-product', ['as' => 'add.product', 'uses' => 'Shop\Products\Http\Controllers\ProductController@postAddProduct']);
    $router->post('/product/add-variable-product', ['as' => 'add.product', 'uses' => 'Shop\Products\Http\Controllers\ProductController@postAddVariableProduct']);
    $router->get('/product/{product_slug}/add-variations', ['as' => 'add.variant.variations', 'uses' => 'Shop\Products\Http\Controllers\VariantController@getAddVariantVariations']);
    $router->post('/product/{product_slug}/add-variations', ['as' => 'add.variant.variations', 'uses' => 'Shop\Products\Http\Controllers\VariantController@postAddVariantVariations']);
});

$router->get('products', ['as' => 'products', 'uses' => 'Shop\Products\Http\Controllers\ProductController@getProducts']);
$router->get('product/{slug}', ['as' => 'product', 'uses' => 'Shop\Products\Http\Controllers\ProductController@getProduct']);