<?php namespace TGL\Shop\Orders\Handlers;


use Illuminate\Support\Facades\Auth;
use TGL\Shop\Container\Entities\Container;
use TGL\Shop\Orders\Commands\AddOrderCommand;
use TGL\Shop\Orders\Entities\Order;
use TGL\Shop\Orders\Repositories\OrderRepository;

class AddOrderCommandHandler
{
    protected $orderRepo;

    function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function handle(AddOrderCommand $command)
    {
        $order = Order::add($command->variant_id, $command->price);

        $this->orderRepo->persist($order);

        Container::where('user_id', '=', Auth::user()->id)->delete();
    }
}