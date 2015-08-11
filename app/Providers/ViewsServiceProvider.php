<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
            view()->composer('layouts.main', function ($view){
                $view->with('userID', Auth::user()->id);
                $view->with('userName', Auth::user()->name);
                $view->with('userLevel', Auth::user()->level);
            });


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
