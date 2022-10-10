<?php

namespace App\Class;
use App\Require\Interface\CommonPropertyInterface;
use App\Require\Trait\CodeTrait;
use App\Require\Trait\NameTrait;
use App\Require\Trait\IdTrait;
use App\Require\Trait\NotesTrait;

class Host implements CommonPropertyInterface
{
    use IdTrait, NameTrait, NotesTrait, CodeTrait;

    public function __construct(
        private string $code, 
        private string $name,
        private string $notes
    )
    {
    }
}