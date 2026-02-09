<?php

namespace Dipghosh\LaravelEnvChecker\Checks;

interface CheckInterface
{
    public function name(): string;

    public function run(): array;
}
