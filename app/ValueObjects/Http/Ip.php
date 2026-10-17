<?php

declare(strict_types=1);

namespace App\ValueObjects\Http;

final readonly class Ip
{
    public function __construct(
        private(set) string $ip
    )
    {
    }

    /**
     * @param  string  $ip
     * @return self
     */
    public static function make(string $ip): self
    {
        return new self($ip);
    }
}