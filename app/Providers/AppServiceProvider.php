<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; // Assurez-vous d'importer cette classe
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
        // Définit une longueur par défaut pour les chaînes dans MySQL
        Schema::defaultStringLength(191);
    }
}
