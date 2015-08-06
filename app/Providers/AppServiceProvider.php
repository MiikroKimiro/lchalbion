<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $userLevel = Auth::user('userLevel');
        $userName = Auth::user('name');
        $userID = Auth::user('id');
        
        view()->share(['userLevel' => $userLevel, 'userName' => $userName, 'userID' => $userID]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
