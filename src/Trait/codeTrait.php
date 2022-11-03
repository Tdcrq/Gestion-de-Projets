<?php

namespace App\Trait;

trait CodeTrait
{
    public function getCode(): string
    {
        return $this->code;
    }
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}
