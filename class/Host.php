<?php

require_once __DIR__."/Customer.php";
require_once __DIR__."Contact.php";

class Host
{
    public function __construct(
        private int $id,
        private string $code, 
        private string $name,
        private string $notes
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNotes(): string 
    {
        return $this->notes;
    }

    public function setCode(string $code): void 
    {
        $this->code = $code;
    }

    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }
}