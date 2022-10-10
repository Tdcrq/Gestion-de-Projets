<?php

namespace App\Class;

use App\require\Interface\EnvironmentInterface;
use App\Require\Trait\IdTrait;

class Environment implements EnvironmentInterface{
    
    use IdTrait;

    public function __construct(
        private string $name, 
        private string $link, 
        private string $ipAddress, 
        private int $sshPort, 
        private string $sshUsername, 
        private string $phpMyAdminLink, 
        private int $ipRestriction, 
        private project $project
    )
    {
    }

    public function getId(): int 
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLink(): string
    {
        return $this->link;
    }
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    public function getSshPort(): int
    {
        return $this->sshPort;
    }
    public function setIpPort(int $sshPort): void
    {
        $this->sshPort = $sshPort;
    }

    public function getSshUsename(): string
    {
        return $this->sshUsername;
    }
    public function setSshUsename(string $sshUsername): void
    {
        $this->sshUsername = $sshUsername;
    }

    public function getphpmyadminLink(): string
    {
        return $this->phpMyAdminLink;
    }
    public function setphpmyadminLink(string $phpMyAdminLink): void
    {
        $this->phpMyAdminLink = $phpMyAdminLink;
    }

    public function getIpRestriction(): int
    {
        return $this->ipRestriction;
    }
    public function setIpRestriction(int $ipRestriction): void
    {
        $this->ipRestriction = $ipRestriction;
    }

    public function getproject(): project
    {
        return $this->project;
    }
    public function setproject(string $project): void
    {
        $this->project = $project;
    }
}
