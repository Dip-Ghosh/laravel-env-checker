<?php

namespace Dipghosh\LaravelEnvChecker\Checks;

use Dipghosh\LaravelEnvChecker\Checks\Support\CheckResult;

final class AppDebugCheck extends AbstractCheck
{
    public function name(): string
    {
        return 'APP_DEBUG';
    }

    protected function evaluate(): CheckResult
    {
        if (! function_exists('config') || ! function_exists('app')) {
            return CheckResult::warning('Laravel not detected');
        }

        if (app()->environment('production') && config('app.debug')) {
            return CheckResult::error('Enabled in production');
        }

        return CheckResult::ok(
            config('app.debug') ? 'Enabled' : 'Disabled'
        );
    }
}
