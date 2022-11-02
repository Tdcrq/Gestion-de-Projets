<?php

namespace App\Class;

use App\Require\Interface\CommonPropertyInterface;
use App\Require\Trait\CodeTrait;
use App\Require\Trait\NameTrait;
use App\Require\Trait\IdTrait;
use App\Require\Trait\NotesTrait;

class Project implements CommonPropertyInterface
{
    use IdTrait;
    use NameTrait;
    use NotesTrait;
    use CodeTrait;

    public function __construct(
        private string $name,
        private string $code,
        private string $lastPassFolder,
        private string $linkMockUps,
        private int $managedServer,
        private string $notes,
        private Host $host,
        private Customer $customer
    ) {
    }

    public function getLastPassFolder(): string
    {
        return $this->lastPassFolder;
    }

    public function setLastPassFolder(string $lastPassFolder): void
    {
        $this->lastPassFolder = $lastPassFolder;
    }

    public function getLinkMockUps(): string
    {
        return $this->linkMockUps;
    }

    public function setLinkMockUps(string $linkMockUps): void
    {
        $this->linkMockUps = $linkMockUps;
    }

    public function getManagedServer(): int
    {
        return $this->managedServer;
    }

    public function setManagedServer(int $managedServer): void
    {
        $this->managedServer = $managedServer;
    }

    public function getHost(): Host
    {
        return $this->host;
    }

    public function setHost(Host $host): void
    {
        $this->host = $host;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $Customer): void
    {
        $this->Customer = $Customer;
    }
}
