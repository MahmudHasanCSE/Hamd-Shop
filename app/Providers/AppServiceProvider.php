<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //set default varchar length to 191 for all in database
        Schema::defaultStringLength(191);

        View::composer(['front.includes.header'], function ($view) {
            $view->with('categories', Category::where('status', 1)->get());
        });
    }
}
