<?php

namespace App\Entity;

use App\Interface\Transform;


class Master
{
    private string $message;

    public function __construct(string $string, Transform $transform, Logger $logger)
    {
        $logger->log($string);
        $this->message = $transform->transform($string);
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}
