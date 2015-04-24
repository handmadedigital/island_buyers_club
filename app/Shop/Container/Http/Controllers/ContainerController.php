<?php
namespace TGL\Shop\Container\Http\Controllers;

use TGL\Core\Http\Controllers\Controller;

class ContainerController extends Controller
{
    public function getContainer()
    {
        return view('container.checkout');
    }
}