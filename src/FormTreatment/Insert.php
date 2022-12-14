<?php

namespace App\FormTreatment;

use FFI\Exception;
// use PDO;
use App\DB\ConnexionBdd;

class Insert
{
    public static function InsertCustomer(array $data): void
    {
        $config = new ConnexionBdd();
        $co = $config->co();
        try {
            $query = $co->prepare("INSERT INTO customer(code, name, notes) VALUES(?, ?, ?)");
            $query->execute([$data[0],$data[1],$data[2]]);
        } catch(Exception $e) {
            $error = $e;
        }
    }

    public static function InsertHost(array $data): void
    {
        $config = new ConnexionBdd();
        $co = $config->co();
        try {
            $query = $co->prepare("INSERT INTO host(code, name, notes) VALUES(?, ?, ?)");
            $query->execute([$data[0],$data[1],$data[2]]);
        } catch(Exception $e) {
            $error = $e;
        }
    }

    public static function InsertProject(array $data): void
    {
        $config = new ConnexionBdd();
        $co = $config->co();
        try {
            $query = $co->prepare("INSERT INTO Project( name, code, lastpass_folder, link_mock_ups, managed_server, notes, host_id, customer_id ) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
            $query->execute([$data["name"],$data["code"],$data["dossierLP"],$data["lienM"],$data["serveurInfo"],$data["notes"],$data["host"],$data["customer"]]);
        } catch(Exception $e) {
            $error = $e;
            echo $error;
        }
    }
}
