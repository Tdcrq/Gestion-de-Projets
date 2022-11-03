<?php

namespace App\Classes;

use App\Interface\CommonPropertyInterface;
use App\Trait\CodeTrait;
use App\Trait\NameTrait;
use App\Trait\IdTrait;
use App\Trait\NotesTrait;

class Host implements CommonPropertyInterface
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
