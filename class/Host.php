<?php
require_once(__DIR__ . '/Customer.php');
require_once(__DIR__.'/Contact.php');

class Host implements classInterface
{
    use classTrait;

    public function __construct(
        private string $code, 
        private string $name,
        private string $notes
    )
    {
    }
}