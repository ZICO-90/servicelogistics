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
            'App\Http\Interfaces\Admin\dileveryInterface',
            'App\Http\Repositories\Admin\dileveryRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\employessInterface',
            'App\Http\Repositories\Admin\employesRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\SectionTags\WelcomeInterface',
            'App\Http\Repositories\Admin\SectionTags\WelocmeRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\InfoSiteInterface',
            'App\Http\Repositories\Admin\InfoSiteRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\PriceOrderInterface',
            'App\Http\Repositories\Admin\PriceOrderRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\TestimonialInterface',
            'App\Http\Repositories\Admin\TestimonialRepository'
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
