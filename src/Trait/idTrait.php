<?php

namespace App\Trait;

trait IdTrait
{
    private int $int;

    public function getId(): int
    {
        return $this->id;
    }
}
