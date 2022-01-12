<?php

namespace App\Interface;

interface Transform
{
    public function transform(string $string): string;
}
