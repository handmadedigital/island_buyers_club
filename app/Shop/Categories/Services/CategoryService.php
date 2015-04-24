<?php
namespace TGL\Shop\Categories\Services;

use TGL\Shop\Categories\Repositories\CategoryRepository;

class CategoryService
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepo;

    function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getCategoryProducts($category_slug)
    {
        $category = $this->categoryRepo->getBySlug($category_slug);

        return $category->products;
    }

    public function getCategories()
    {
        return $this->categoryRepo->getLatest();
    }
}