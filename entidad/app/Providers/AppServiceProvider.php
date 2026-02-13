<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\MotoRepositoryInterface;
use App\Repositories\Eloquent\MotoRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            MotoRepositoryInterface::class,
            MotoRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
