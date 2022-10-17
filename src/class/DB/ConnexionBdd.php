<?php
namespace App\Class\DB;

use PDO;
use PDOException;

class ConnexionBdd
{
    public function __construct(
        private string $server = "localhost",
        private string $user = "root",
        private string $pass = "",
        private string $dbName = "gestion_projects"
        )
        {
        }

    public function co()
    {
        try
        {
            $attributs = $this->getAttributs();
            $co = new PDO("mysql:host=" . $attributs[0] .";dbname=" . $attributs[3] . ";charset=utf8", $attributs[1], $attributs[2]);
            $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        return $co;
    }
    public function getAttributs(): array
    {
        return array($this->server, $this->user, $this->pass, $this->dbName);
    }
}
