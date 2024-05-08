<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Setting;
use App\Models\Category;


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
        Schema::defaultStringLength(191);

        // Register a view composer to provide data to a specific view
        View::composer('*', function ($view) {
            // Bind the variable 'menu_featured_categories' to the view
            $view->with(
                // Retrieve up to 10 categories that are featured and have status 1, ordered by id
                'menu_featured_categories', Category::orderBy('id', 'ASC')
                    ->where('is_featured', '=', 1)
                    ->where('status', '=', 1)
                    ->limit(10)
                    ->get()
            );
        });
    }
}
