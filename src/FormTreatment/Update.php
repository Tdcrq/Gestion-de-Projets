<?php

namespace App\FormTreatment;

use FFI\Exception;
use App\DB\ConnexionBdd;

class Update
{
    public static function UpdateCustomer(array $data, int $id): void
    {
        $config = new ConnexionBdd();
        $co = $config->co();
        try {
            $query = $co->prepare("UPDATE customer SET code=?, name=?, notes=? WHERE id=?");
            $query->execute([$data[0], $data[1], $data[2], $id]);
        } catch(Exception $e) {
            $error = $e;
        }
    }

    public static function UpdateHost(array $data, int $id): void
    {
        $config = new ConnexionBdd();
        $co = $config->co();
        try {
            $query = $co->prepare("UPDATE host SET code=?, name=?, notes=? WHERE id=?");
            $query->execute([$data[0], $data[1], $data[2], $id]);
        } catch(Exception $e) {
            $error = $e;
        }
    }

    public static function UpdateProject(array $data, int $id): void
    {
        $config = new ConnexionBdd();
        $co = $config->co();
        try {
            $query = $co->prepare("UPDATE project SET code=?, name=?, notes=?, lastpass_folder=?, link_mock_ups=?, managed_server=?, host_id=?, customer_id=? WHERE id=?");
            $query->execute([$data["code"], $data["name"], $data["notes"], $data["dossierLP"], $data["lienM"], $data["serveurInfo"], $data["host"], $data["customer"], $id]);
        } catch(Exception $e) {
            $error = $e;
        }
    }
}
