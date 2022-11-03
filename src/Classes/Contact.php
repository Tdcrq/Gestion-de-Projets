<?php

namespace App\Classes;

use App\Trait\IdTrait;

class Contact
{
    use IdTrait;

    public function __construct(
        private string $email,
        private string $phoneNumber,
        private string $role,
        private Host $host,
        private Customer $customer
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getHostId(): Host
    {
        return $this->host;
    }

    public function getCustomerId(): Customer
    {
        return $this->customer;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function setHostId(Host $host): void
    {
        $this->host = $host;
    }

    public function setCustomerId(Customer $customer): void
    {
        $this->customer = $customer;
    }
}
