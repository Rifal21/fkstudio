<?php

namespace App\Providers;

use App\Helpers\Cockpit;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $config = Cache::remember('config', 60 * 60, function () {
            return Cockpit::first('config');
        });

        $navbar = Cache::remember('navbarlist', 60 * 60, function () {
            return Cockpit::first('navbarlist');
        });
        $subnavbar = Cache::remember('navbardetail', 60 * 60, function () {
            return Cockpit::first('navbardetail');
        });
        // $footer = Cache::remember('footer', 60 * 60, function () {
        //     return Cockpit::first('footer');
        // });
        View::share('config', $config);
        View::share('navbar', $navbar);
        View::share('subnavbar', $subnavbar);
        // View::share('footer', $footer);
    }
}
