<?php
namespace App\Require\Trait;

trait NotesTrait {
    private string $notes;

    public function getNotes(): string 
    {
        return $this->notes;
    }
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }
}