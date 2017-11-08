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
        $path = $this->app['config']['theme.path'].'/'.$this->app['config']['theme.active'];
        $this->loadViewsFrom($path, 'theme');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
