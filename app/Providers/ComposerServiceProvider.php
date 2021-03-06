<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($view) {
            $category = Category::all();
            $view->with('categories', $category);
        });
    }
}
