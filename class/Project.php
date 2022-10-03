<?php 

    require_once(__DIR__ . '/Customer.php');
    require_once(__DIR__ . '/Host.php');

    class Project
    {
        private int $id;

        public function __construct(
            private string $name,
            private string $code,
            private string $lastPassFolder,
            private string $linkMockUps,
            private int $managedServer,
            private string $text,
            private Host $host,
            private Customer $customer
        ){}
            
        public function getId(): int{
            return $this->id;
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
            return $this->lastPassFolder;
        }

        public function setLastPassFolder(string $lastPassFolder): void{
            $this->lastPassFolder = $lastPassFolder;
        }

        public function getLinkMockUps(): string{
            return $this->linkMockUps;
        }

        public function setLinkMockUps(string $linkMockUps): void{
            $this->linkMockUps = $linkMockUps;
        }

        public function getManagedServer(): int{
            return $this->managedServer;
        }

        public function setManagedServer(int $managedServer): void{
            $this->managedServer = $managedServer;
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
            return $this->customer;
        }

        public function setCustomer(Customer $Customer): void{
            $this->Customer = $Customer;
        }
    }
?>