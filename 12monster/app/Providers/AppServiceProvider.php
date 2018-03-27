<?php

namespace App\Providers;

use App\GuestUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // auth()->loginUsingId(1);
        auth()->logout();

        view()->share('signedIn', auth()->check());
        view()->share('user', Auth::user() ?: new \App\GuestUser);
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
