<?php

namespace App\Providers;

use App\FileViewFinder;
use App\Themes\Themes;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ThemesServiceProvider extends ServiceProvider
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
        $path = $this->app['config']['theme.path'].'/'.$this->app['config']['theme.active'];
        $this->loadViewsFrom($path, 'theme');
    }
}
