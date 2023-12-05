<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//importamos libreria
use Illuminate\Support\Facades\Schema;

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
        //definimos de una vez el Schema para el boot e importamos la librería
        Schema::defaultStringLength(191);
        
    }
}
