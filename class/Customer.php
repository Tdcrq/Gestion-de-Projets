<?php
    class Customer {

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
        public function setId(int $id): int
        {
            $this->id = $id;
        }

        public function getCode(): string
        {
            return $this->code;
        }
        public function setCode(string $code): void 
        {
            $this->code = $code;
        }

        public function getName(): string
        {
            return $this->name;
        }
        public function setName(string $name): void 
        {
            $this->name = $name;
        }

        public function getNotes(): string 
        {
            return $this->notes;
        }
        public function setNotes(string $notes): void
        {
            $this->notes = $notes;
        }
    }