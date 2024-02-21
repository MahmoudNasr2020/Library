<?php

namespace App\Providers;

use App\Http\Interface\CategoryInterface;
use App\Http\Repository\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
