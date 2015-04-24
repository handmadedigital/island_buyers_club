<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/26/15
 * Time: 11:54 AM
 */

namespace TGL\Shop\Orders\Http\Controllers;


use TGL\Core\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function getOrders()
    {
        return view('orders.all');
    }

    public function getOrder()
    {
        return view('orders.individual');
    }
}