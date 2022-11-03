<?php

namespace App\Trait;

trait NotesTrait
{
    public function getNotes(): string
    {
        return $this->notes;
    }
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }
}
