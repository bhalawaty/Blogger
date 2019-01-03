<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use  Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        view()->composer('layouts.archive',function($view){
            $view->with('archives', \App\Post::archives());
        });

        Schema::defaultStringLength(191);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
