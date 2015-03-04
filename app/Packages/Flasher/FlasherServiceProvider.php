<?php namespace TGL\Packages\Flasher;

use Illuminate\Support\ServiceProvider;

class FlasherServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'TGL\Packages\Flasher\Contracts\SessionStore',
            'TGL\Packages\Flasher\LaravelSessionStore'
        );
        $this->app->bindShared('flasher', function () {
            return $this->app->make('TGL\Packages\Flasher\FlasherNotifier');
        });
    }
}