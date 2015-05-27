<?php namespace TGL\Shop\Orders\Repositories;

use Illuminate\Support\Facades\Auth;
use TGL\Core\Repositories\EloquentRepository;
use TGL\Shop\Orders\Entities\Order;

class OrderRepository extends EloquentRepository
{
    protected $model;

    function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function persist($order)
    {
        $order_number = rand(10000000,99999999);

        $count = count($order->variant_id);

        for($i = 0; $i < $count; $i++)
        {
            $model = new Order();
            $model->user_id = Auth::user()->id;
            $model->variant_id = $order->variant_id[$i];
            $model->order_number = $order_number;
            $model->price = $order->price[$i];

            $model->save();
        }
    }
}