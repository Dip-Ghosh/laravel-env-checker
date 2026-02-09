<?php

namespace Dipghosh\LaravelEnvChecker\Checks\Support;

final class CheckResult
{
    private function __construct(public readonly string $status, public readonly string $message) {}

    public static function ok(string $message): self
    {
        return new self(Status::OK, $message);
    }

    public static function warning(string $message): self
    {
        return new self(Status::WARNING, $message);
    }

    public static function error(string $message): self
    {
        return new self(Status::ERROR, $message);
    }
}
