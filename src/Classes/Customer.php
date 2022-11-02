<?php

namespace App\Class;

use App\Require\Interface\CommonPropertyInterface;
use App\Require\Trait\CodeTrait;
use App\Require\Trait\NameTrait;
use App\Require\Trait\IdTrait;
use App\Require\Trait\NotesTrait;

class Customer implements CommonPropertyInterface
{
    use IdTrait;
    use NameTrait;
    use NotesTrait;
    use CodeTrait;

    public function __construct(
        private string $code,
        private string $name,
        private string $notes
    ) {
    }
}
