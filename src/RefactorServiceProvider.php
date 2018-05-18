<?php

namespace Signifly\DatabaseRefactors;

use Illuminate\Support\ServiceProvider;
use Signifly\DatabaseRefactors\Commands\RefactorDbCommand;
use Signifly\DatabaseRefactors\Commands\RefactorMakeCommand;

class RefactorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RefactorDbCommand::class,
                RefactorMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
