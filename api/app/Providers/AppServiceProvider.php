<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Services\MoviesServiceInterface;
use App\Contracts\Services\PeopleServiceInterface;
use App\Services\MoviesService;
use App\Services\PeopleService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        MoviesServiceInterface::class => MoviesService::class,
        PeopleServiceInterface::class => PeopleService::class,
    ];

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
        //
    }
}
