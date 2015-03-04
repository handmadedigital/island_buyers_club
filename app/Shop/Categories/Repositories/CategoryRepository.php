<?php namespace TGL\Shop\Categories\Repositories;


use TGL\Core\Repositories\EloquentRepository;
use TGL\Shop\Categories\Entities\Category;

class CategoryRepository extends EloquentRepository
{
    protected $model;

    function __construct(Category $model)
    {
        $this->model = $model;
    }
}