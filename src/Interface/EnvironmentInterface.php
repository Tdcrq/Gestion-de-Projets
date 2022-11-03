<?php

namespace App\Interface;

interface EnvironmentInterface
{
    public function getId(): int;
    public function getName(): ?string;
    public function setName(string $name): void;
}
