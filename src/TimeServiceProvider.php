<?php

namespace Masoud\Time;

use Illuminate\Support\ServiceProvider;
use Masoud\Time\Facade\Timer;
use Masoud\Time\Middlewares\CheckTime;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //bind
        $this->app->bind('MyTimer',function(){
           return new Timer();
        });
        //route
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        //view
        $this->loadViewsFrom(__DIR__.'/Views', 'MyView');
        //publish view
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/MyView'),
        ],'Mytag');
        //config
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('MyConfig'),
        ],'f');
        //middleware
        $router=$this->app['router'];
        $router->middleware('checkTime',CheckTime::class);
        //migration
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->publishes([
            __DIR__.'/Migrations' => database_path('migrations'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php', 'MyConfig'
        );
    }
}
