<?php namespace TGL\Shop\Categories\Helpers;

use TGL\Shop\Categories\Repositories\CategoryRepository;

class CategoryHelper
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepo;

    /**
     * @param CategoryRepository $categoryRepo
     */
    function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getSidebarCategories()
    {
        $categories = $this->categoryRepo->getLatest();

        foreach($categories as $category)
        {
            echo '<li class=""><a href="/products/'.$category->slug.'"><span>'.$category->name.'</span></a></li>';
        }
    }
}