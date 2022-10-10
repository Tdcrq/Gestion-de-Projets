<?php
namespace App\Require\Trait;

trait CodeTrait {
    private string $code;

    public function getCode(): string
    {
        return $this->code;
    }
    public function setCode(string $code): void 
    {
        $this->code = $code;
    }
}