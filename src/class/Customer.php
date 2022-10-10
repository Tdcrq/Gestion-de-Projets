<?php
namespace App\Class;
use App\Require\classInterface;
use App\Require\classTrait;

class Customer implements classInterface{
    use classTrait;
    
    public function __construct(
        private string $code, 
        private string $name, 
        private string $notes
    )
    {
    }
}
