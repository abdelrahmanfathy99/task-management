<?php

namespace App\Providers;

use App\Repositories\Contracts\AuthInterface;
use App\Repositories\Contracts\TaskInterface;
use App\Repositories\Eloquents\AuthRepository;
use App\Repositories\Eloquents\TaskRepository;
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
        $this->app->bind(AuthInterface::class, AuthRepository::class);
        $this->app->bind(TaskInterface::class, TaskRepository::class);
    }
}
