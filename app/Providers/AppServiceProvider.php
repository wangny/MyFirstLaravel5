<?php

namespace App\Providers;

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
        //this will be run when any view is loaded
        view()->composer('layout.side', function($view){
            //kindof callback function
            $view->with('archives', \App\Post::archives());
            //register archives to view, so this will be watchiing
            $view->with('tags', \App\Tag::all()->pluck('name'));   //has('posts')
        });
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
