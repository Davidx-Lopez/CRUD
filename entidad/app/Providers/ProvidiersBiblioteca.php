<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\LibroInterface;
use App\Repositories\LibroRepository;

class ProvidersBiblioteca extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LibroInterface::class, LibroRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
