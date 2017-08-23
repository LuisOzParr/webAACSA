<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PanelProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind('panel', function()
        {
            return new \App\Components\Panel;
        });
    }
}
