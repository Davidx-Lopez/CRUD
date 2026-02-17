<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // 📚 Libro
        $this->app->bind(
            \App\Repositories\Interfaces\LibroInterface::class,
            \App\Repositories\Eloquent\LibroRepository::class
        );

        // 🏍 Moto
        $this->app->bind(
            \App\Repositories\Interfaces\MotoRepositoryInterface::class,
            \App\Repositories\Eloquent\MotoRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
