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
        //register admin 
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
      
//settings control html start

$this->app->bind(
    'App\Http\Interfaces\Admin\SectionTags\WelcomeInterface',
    'App\Http\Repositories\Admin\SectionTags\WelocmeRepository'
);

//settings control html end



//register admin end


        // register  user
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
