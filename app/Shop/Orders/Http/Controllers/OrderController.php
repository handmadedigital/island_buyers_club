<?php namespace TGL\Shop\Orders\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use TGL\Core\Http\Controllers\Controller;
use TGL\Packages\Flasher\Flasher;
use TGL\Shop\Orders\Commands\AddOrderCommand;
use TGL\Shop\Orders\Entities\Order;
use TGL\Shop\Orders\Http\Requests\AddOrderRequest;

class OrderController extends Controller
{
    public function getOrders()
    {
        return view('orders.all');
    }

    public function getUserOrders($user_slug)
    {
        $orders = Order::where('user_id', '=', Auth::user()->id)->groupBy('order_number')->latest()->get();

        return view('orders.all', compact('orders'));
    }

    public function getOrder($user_slug, $order_number)
    {
        $order = Order::where('order_number', '=', $order_number)->get();

        return view('orders.individual', compact('order'));
    }

    public function postAddOrder(AddOrderRequest $request)
    {
        $this->dispatch(AddOrderCommand::class);

        Flasher::message('Order placed!');

        return redirect()->back();
    }

}