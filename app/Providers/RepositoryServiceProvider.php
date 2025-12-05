<?php

namespace App\Providers;

use App\Repositories\Contracts\AuthInterface;
use App\Repositories\Contracts\TaskInterface;
use App\Repositories\Eloquents\AuthRepository;
use App\Repositories\Eloquents\TaskRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(AuthInterface::class, AuthRepository::class);
        $this->app->bind(TaskInterface::class, TaskRepository::class);
    }
}
