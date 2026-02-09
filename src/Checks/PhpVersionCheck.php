<?php

namespace Dipghosh\LaravelEnvChecker\Checks;

class PhpVersionCheck implements CheckInterface
{
    public function name(): string
    {
        return 'PHP Version';
    }

    public function run(): array
    {
        if (version_compare(PHP_VERSION, '8.1.0', '>=')) {
            return [
                'status' => 'ok',
                'message' => PHP_VERSION,
            ];
        }

        return [
            'status' => 'error',
            'message' => 'PHP 8.1+ required',
        ];
    }
}
