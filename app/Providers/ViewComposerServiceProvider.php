<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Auth;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        View::composer('layouts.partials._aside', function ($view) {
            $view->with('categories', Category::orderBy('name', 'asc')->get());
        });

        View::composer('layouts.app', function($view) {
            $user = null;
            if(Auth::check()) {
                $user = Auth::user();
            }
            $view->with('authUser', $user);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
