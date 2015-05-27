<?php
namespace TGL\Users\Services;


use TGL\Shop\Categories\Repositories\CategoryRepository;
use TGL\Shop\Products\Repositories\ProductRepository;

class UserDashboardService
{
    protected $categoryRepo;

    /**
     * @var ProductRepository
     */
    protected $productRepo;

    function __construct(CategoryRepository $categoryRepo, ProductRepository $productRepo)
    {
        $this->categoryRepo = $categoryRepo;
        $this->productRepo = $productRepo;
    }

    public function loadDashboard($username)
    {
        $dashboard = [];

        $dashboard['categories'] = $this->categoryRepo->getLatest();

        $dashboard['recent_products'] = $this->productRepo->getLatestPaginated(8)->load('images');

        return $dashboard;

    }
}