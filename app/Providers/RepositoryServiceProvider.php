<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminHomeInterface',
            'App\Http\Repositories\Admin\AdminHomeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\newsInterface',
            'App\Http\Repositories\Admin\newsRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\conventionInterface',
            'App\Http\Repositories\Admin\conventionRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserHomeInterface',
            'App\Http\Repositories\EndUser\EndUserHomeRepository'
        );
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
