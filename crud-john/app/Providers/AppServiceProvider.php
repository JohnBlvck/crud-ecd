<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//importamos libreria
use Illuminate\Support\Facades\Schema;
use BezhanSalleh\FilamentLanguageSwitch\LanguageSwitch;

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
    public function boot()
    {
        //definimos de una vez el Schema para el boot e importamos la librería
        Schema::defaultStringLength(191);

        //Elegimos los lenguajes soportados en nuestra app
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['es','en','fr']);
        });
        
    }
}
