<?php

namespace App\Entity;

use App\Interface\Transform;

class Capitalize implements Transform
{
    public function transform(string $string): string
    {
        // for ($i = 0; $i < strlen($string); $i++) {
        //     if ($i % 2 != 0) {
        //         $string[$i] = strtoupper($string[$i]);
        //     }
        // }
        for ($i = 0; $i < strlen($string); $i += 2) {
            $string[$i] = strtoupper($string[$i]);
        }
        return $string;
    }
}
