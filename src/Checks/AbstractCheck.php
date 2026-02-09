<?php

namespace Dipghosh\LaravelEnvChecker\Checks;

use Dipghosh\LaravelEnvChecker\Checks\Contracts\CheckInterface;
use Dipghosh\LaravelEnvChecker\Checks\Support\CheckResult;

abstract class AbstractCheck implements CheckInterface
{

    final public function run(): CheckResult
    {
        return $this->evaluate();
    }

    abstract protected function evaluate(): CheckResult;
}