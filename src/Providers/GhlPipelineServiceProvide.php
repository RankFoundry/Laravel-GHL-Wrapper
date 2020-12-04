<?php

namespace Rankfoundry\LaravelGhlWrapper\Providers;

use Illuminate\Support\ServiceProvider;

class GhlPipelineServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GhlPipeline', function () {
            return new \Rankfoundry\LaravelGhlWrapper\GhlPipeline();
        });
    }
}
