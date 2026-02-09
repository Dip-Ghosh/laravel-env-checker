<?php

namespace Dipghosh\LaravelEnvChecker\Checks\Support;

final class Status
{
    public const OK      = 'ok';
    public const WARNING = 'warning';
    public const ERROR   = 'error';

    private function __construct() { }
}
