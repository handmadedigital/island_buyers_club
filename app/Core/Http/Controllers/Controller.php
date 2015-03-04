<?php namespace TGL\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use TGL\Packages\CommandBus\CommandTrait;

abstract class Controller extends BaseController {

	use CommandTrait;
}
