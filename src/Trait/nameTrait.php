<?php

namespace App\Trait;

trait NameTrait
{
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
