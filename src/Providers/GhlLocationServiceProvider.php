<?php

namespace Rankfoundry\LaravelGhlWrapper\Providers;

use Illuminate\Support\ServiceProvider;

class GhlLocationServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GhlLocation', function () {
            return new \Rankfoundry\LaravelGhlWrapper\GhlLocation();
        });
    }
}
