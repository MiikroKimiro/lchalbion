<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use app\accClass;


class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.*', 'referents.*', 'participation.*'], function ($view){
            $view->with('userID', Auth::user()->id);
            $view->with('userName', Auth::user()->name);
            $view->with('userLevel', Auth::user()->level);
        });

        view()->composer('referents.finances.accounting', function ($view){
            $classList = accClass::orderBy('className')->lists('className', 'id');
            $view->with('classList', $classList);
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
