<?php namespace TGL\Providers;


use Illuminate\Support\ServiceProvider;
use TGL\Shop\Categories\Helpers\CategoryHelper;
use TGL\Shop\Products\Helpers\VariantHelper;

class HelperServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->variantHelper();
        $this->categoryHelper();
    }

    protected function variantHelper()
    {
        $this->app->bind('VariantHelper', function () {
            return new VariantHelper();
        });
    }

    protected function categoryHelper()
    {
        $this->app->bind('CategoryHelper', function ()
        {
            $repo = $this->app->make('TGL\Shop\Categories\Repositories\CategoryRepository');
            return new CategoryHelper($repo);
        });
    }
}