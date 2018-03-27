<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use \App\Billing\Stripe;
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
        view()->composer('layouts.sidebar', function($view) {
            $archives = Post::archives();
            $tags = Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // regular usage
        // $this->app->bind('App\Billing\Stripe', function() {
        //     return new \App\Billing\Stripe(config('services.stripe.secret'));
        // });

        // only one instance
        $this->app->singleton(Stripe::class, function() {
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
