<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('admin.includes.navigation',function ($view){
            $view->with('unread_messages',\App\Message::message());
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
