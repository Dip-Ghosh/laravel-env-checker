<?php

namespace Dipghosh\LaravelEnvChecker;

use Illuminate\Support\ServiceProvider;
use Dipghosh\LaravelEnvChecker\Commands\EnvCheckerCommand;

class EnvCheckerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnvCheckerCommand::class,
            ]);
        }
    }
}
