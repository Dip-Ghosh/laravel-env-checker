<?php

namespace Dipghosh\LaravelEnvChecker\Commands;

use Dipghosh\LaravelEnvChecker\Checks\AppDebugCheck;
use Dipghosh\LaravelEnvChecker\Checks\PhpVersionCheck;
use Illuminate\Console\Command;

class EnvCheckerCommand extends Command
{
    protected $signature = 'env:checker';

    protected $description = 'Check Laravel environment health';

    public function handle()
    {
        $checks = [
            new PhpVersionCheck(),
            new AppDebugCheck(),
        ];

        $this->info('🩺 Laravel Environment Doctor');
        $this->newLine();

        foreach ($checks as $check) {
            $result = $check->run();

            match ($result->status) {
                'ok'      => $this->line('✅ '.$check->name().': '.$result->message),
                'warning' => $this->warn('⚠ '.$check->name().': '.$result->message),
                'error'   => $this->error('❌ '.$check->name().': '.$result->message),
            };
        }
    }
}
