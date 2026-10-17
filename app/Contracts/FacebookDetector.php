<?php

namespace App\Contracts;

use App\ValueObjects\Http\Ip;

interface FacebookDetector
{
    public function match(Ip $ip): bool;
}