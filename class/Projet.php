<?php 

    require('./Customer');
    require('./Host');

    class Projet
    {
        public function __construct(
            private int $id,
            private string $name,
            private string $code,
            private string $lastpass_folder,
            private string $link_mock_ups,
            private int $managed_server,
            private string $text,
            private Host $host_id,
            private Customer $customer_id
        ){}
            
        public function getId(): int{
            return $this->id;
        }

        public function setId(int $id): void{
            $this->id = $id;
        }

        public function getName(): string{
            return $this->name;
        }

        public function setName(string $name): void{
            $this->name = $name;
        }

        public function getCode(): string{
            return $this->code;
        }

        public function setCode(string $code): void{
            $this->code = $code;
        }

        public function getLastPassFolder(): string{
            return $this->lastpass_folder;
        }

        public function setLastPassFolder(string $lastpass_folder): void{
            $this->lastpass_folder = $lastpass_folder;
        }

        public function getLinkMockUps(): string{
            return $this->link_mock_ups;
        }

        public function setLinkMockUps(string $link_mock_ups): void{
            $this->link_mock_ups = $link_mock_ups;
        }

        public function getManagedServer(): int{
            return $this->managed_server;
        }

        public function setManagedServer(int $managed_server): void{
            $this->managed_server = $managed_server;
        }

        public function getText(): string{
            return $this->text;
        }

        public function setText(string $text): void{
            $this->text = $text;
        }

        public function getHost(): Host{
            return $this->host;
        }

        public function setHost(Host $host): void{
            $this->host = $host;
        }

        public function getCustomer(): Customer{
            return $this->host;
        }

        public function setCustomer(Customer $Customer): void{
            $this->Customer = $Customer;
        }
    }
?>