<?php
namespace TGL\Shop\Container\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use TGL\Core\Http\Controllers\Controller;
use TGL\Packages\Flasher\Flasher;
use TGL\Shop\Container\Commands\AddToContainerCommand;
use TGL\Shop\Container\Entities\Container;
use TGL\Shop\Container\Http\Requests\AddToContainerRequest;

class ContainerController extends Controller
{
    public function getContainer()
    {
        $products = Container::where('user_id', '=', Auth::user()->id)->get();

        return view('container.checkout', compact('products'));
    }

    public function postAddToContainer(AddToContainerRequest $request)
    {
        $this->dispatch(AddToContainerCommand::class);

        Flasher::message('Product has been added to container');

        return redirect()->back();
    }
}