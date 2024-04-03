<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Customer\StoreService;
use App\Services\Customer\UpdateService;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StoreService::class, StoreService::class);
        $this->app->singleton(UpdateService::class, UpdateService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
