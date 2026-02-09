<?php

namespace YourName\EnvDoctor\Checks;

use Dipghosh\LaravelEnvChecker\Checks\CheckInterface;

class AppDebugCheck implements CheckInterface
{
    public function name(): string
    {
        return 'APP_DEBUG';
    }

    public function run(): array
    {
        if (app()->environment('production') && config('app.debug')) {
            return [
                'status' => 'error',
                'message' => 'Enabled in production',
            ];
        }

        return [
            'status' => 'ok',
            'message' => config('app.debug') ? 'Enabled' : 'Disabled',
        ];
    }
}
