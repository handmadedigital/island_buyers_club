<?php
namespace TGL\Shop\Categories\Http\Controllers;

use TGL\Core\Http\Controllers\Controller;
use TGL\Shop\Categories\Services\CategoryService;

class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    protected $categoryService;

    function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function getProductCategory($category_slug)
    {
        $products = $this->categoryService->getCategoryProducts($category_slug);

        return view('products.product-category', compact('products'));
    }

    public function getCategories()
    {
        $categories = $this->categoryService->getCategories();

        return view('products.categories.all', compact('categories'));
    }
}