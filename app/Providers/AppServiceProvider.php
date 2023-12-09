<?php

namespace App\Providers;

use App\Http\View\Composers\UserDataComposer;
use Illuminate\Support\Facades\Config;
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
        Config::set('seotools.meta.defaults.title', 'Meedbrink');
        Config::set('app.name', 'Meedbrink');
        view()->composer('customer.layout.header', UserDataComposer::class);
    }
}
