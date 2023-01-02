<?php

namespace App\Providers;

use App\Apis\Users\Interfaces\DataMapperInterface;
use App\Apis\Users\Interfaces\EntityInterface;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $active_api =config()->get("settings");

        app()->singleton(EntityInterface::class, function () use ($active_api) {
            return new $active_api["entity_name"];
        });

        app()->singleton(DataMapperInterface::class, function () use ($active_api) {
            return new $active_api["data_mapper"];
        });
    }
}
