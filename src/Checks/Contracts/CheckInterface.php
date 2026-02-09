<?php

namespace Dipghosh\LaravelEnvChecker\Checks\Contracts;

use Dipghosh\LaravelEnvChecker\Checks\Support\CheckResult;

interface CheckInterface
{
    public function name(): string;

    public function run(): CheckResult;
}
