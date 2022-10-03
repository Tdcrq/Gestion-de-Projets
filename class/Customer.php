<?php
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
