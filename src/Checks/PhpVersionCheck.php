<?php

namespace Dipghosh\LaravelEnvChecker\Checks;

use Dipghosh\LaravelEnvChecker\Checks\Support\CheckResult;

final class PhpVersionCheck extends AbstractCheck
{
    public function name(): string
    {
        return 'PHP Version';
    }

    protected function evaluate(): CheckResult
    {
        if (version_compare(PHP_VERSION, '8.1.0', '>=')) {
            return CheckResult::ok(PHP_VERSION);
        }

        return CheckResult::error('PHP 8.1+ required');
    }
}
