<?php

namespace App\Entity;

use App\Interface\Transform;

class Dash implements Transform
{
    public function transform(string $string): string
    {
        return str_replace(' ', '-', $string);
    }
}
