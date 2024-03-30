<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Inventory\StoreService;

class InventoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StoreService::class, StoreService::class);
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
