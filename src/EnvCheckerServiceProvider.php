<?php

namespace Dipghosh\LaravelEnvChecker;

use Illuminate\Support\ServiceProvider;
use Dipghosh\LaravelEnvChecker\Commands\EnvDoctorCommand;

class EnvCheckerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnvDoctorCommand::class,
            ]);
        }
    }
}
