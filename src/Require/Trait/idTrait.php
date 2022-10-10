<?php
namespace App\Require\Trait;

trait IdTrait {
    private int $int;

    public function getId(): int
    {
        return $this->id;
    }
}