<?php
namespace App\Require\Trait;

trait NameTrait {
    private string $name; 

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void 
    {
        $this->name = $name;
    }
}