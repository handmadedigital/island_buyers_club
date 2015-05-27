<?php namespace TGL\Shop\Container\Repositories;

use Illuminate\Contracts\Auth\Guard;
use TGL\Core\Repositories\EloquentRepository;
use TGL\Shop\Container\Entities\Container;

class ContainerRepository extends EloquentRepository
{
    protected $model;

    /**
     * @var Guard
     */
    protected  $auth;

    function __construct(Container $model, Guard $auth)
    {
        $this->model = $model;
        $this->auth = $auth;
    }

    public function getByUserId($user_id)
    {
        return $this->model->where('user_id', '=', $user_id)->get();
    }

    public function persist($container)
    {
        $this->model->user_id = $this->auth->user()->id;
        $this->model->variant_id = $container->variant_id;
        $this->model->quantity = $container->quantity;

        $this->model->save();
    }
}