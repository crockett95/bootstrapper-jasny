<?php namespace Crockett95\BootstrapperJasny;

use Illuminate\Support\ServiceProvider;

class BootstrapperJasnyServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('crockett95/bootstrapper-jasny');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('bootstrapper-jasny.navigation', function ($app)
        {
            return new Navigation($app['url']);
        });
        $this->app->bind('bootstrapper-jasny.alert', function ($app)
        {
            return new Alert();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array(
            'bootstrapper-jasny.navigation',
            'bootstrapper-jasny.alert'
        );
    }

}
