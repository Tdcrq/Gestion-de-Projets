<?php
    require_once(__DIR__ . '/Projet.php';
    class Environment {

        public function __construct(
            private int $id, 
            private string $name, 
            private string $link, 
            private string $ip_address, 
            private int $ssh_port, 
            private string $ssh_usename, 
            private string $phpmyadmin_link, 
            private int $ip_restriction, 
            private int $project_id
        )
        {
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
            return $this->ip_address;
        }
        public function setIpAddress(string $ip_address): void
        {
            $this->ip_address = $ip_address;
        }

        public function getSshPort(): int
        {
            return $this->ssh_port;
        }
        public function setIpPort(int $ssh_port): void
        {
            $this->ssh_port = $ssh_port;
        }

        public function getSshUsename(): string
        {
            return $this->ssh_usename;
        }
        public function setSshUsename(string $ssh_usename): void
        {
            $this->ssh_usename = $ssh_usename;
        }

        public function getphpmyadminLink(): string
        {
            return $this->phpmyadmin_link;
        }
        public function setphpmyadminLink(string $phpmyadmin_link): void
        {
            $this->phpmyadmin_link = $phpmyadmin_link;
        }

        public function getIpRestriction(): int
        {
            return $this->ip_restriction;
        }
        public function setIpRestriction(int $ip_restriction): void
        {
            $this->ip_restriction = $ip_restriction;
        }
    }