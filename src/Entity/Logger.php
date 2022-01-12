<?php

namespace App\Entity;

class Logger
{
    public function log(string $string): string
    {
        $string = '\n';
        return file_put_contents('log.info', $string, FILE_APPEND);
    }
}
