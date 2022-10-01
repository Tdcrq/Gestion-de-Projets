<?php

require_once(__DIR__.'/Customer.php');
require_once(__DIR__.'/Host.php');

class Contact
{
    private int $id;

    public function __construct(
        private string $email, 
        private string $phone_number,
        private string $role,
        private Host $host_id,
        private Customer $customer_id
    )
    {
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
        return $this->host_id;
    }

    public function getCustomerId(): Customer 
    {
        return $this->customer_id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function setEmail(string $email): void 
    {
        $this->email = $email;
    }

    public function setPhoneNumber(string $phone_number): void 
    {
        $this->phone_number = $phone_Number;
    }

    public function setRole(string $role): void 
    {
        $this->role = $role;
    }

    public function setHostId(Host $host_id): void 
    {
        $this->host_id = $host_id;
    }

    public function setCustomerId(Customer $customer_id): Customer
    {
        $this->customer_id = $customer_id;
    }
}