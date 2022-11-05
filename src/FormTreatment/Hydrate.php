<?php

namespace App\FormTreatment;

use App\Classes\Customer;
use App\Classes\Project;
use App\Classes\Host;
use App\DB\ConnexionBdd;
use Error;

class Hydrate
{
    public static function treatmentCodeName(string $n): array
    {
        $code = $name = Trim($n);
        $code = strtoupper(str_replace(" ", "_", $code));
        $code = preg_replace("/_+/", "_", $code);
        return ["code" => $code, "name" => $name];
    }

    public static function hydrateCustomer(array $data): Customer
    {
        $temp = Hydrate::treatmentCodeName($data["name"]);
        return new Customer($temp["code"], $temp["name"], $data["notes"]);
    }

    public static function hydrateHost(array $data): Host
    {
        $temp = Hydrate::treatmentCodeName($data["name"]);
        return new Host($temp["code"], $temp["name"], $data["notes"]);
    }

    public static function hydrateProject(array $data): Project
    {
        $config = new ConnexionBdd();
        $co = $config->co();

        $query_customer = $co->prepare("SELECT * FROM customer WHERE id = ?");
        $query_host = $co->prepare("SELECT * FROM host WHERE id = ?");
        $query_customer->execute([intval($data["id_customer"])]);
        $query_host->execute([intval($data["id_host"])]);
        $data_customer = $query_customer->fetchAll();
        $data_host = $query_host->fetchAll();

        foreach ($data_customer as $data_c) {
            $customer = [
                "name" => $data_c["name"],
                "notes" => $data_c["notes"]
            ];
            $customer = Hydrate::hydrateCustomer($customer);
        }
        foreach ($data_host as $data_h) {
            $host = [
                "name" => $data_h["name"],
                "notes" => $data_h["notes"]
            ];
            $host = Hydrate::hydrateHost($host);
        }
        var_dump($host);
        $temp = Hydrate::treatmentCodeName($data["name"]);
        return new Project(
            $temp["name"], 
            $temp["code"], 
            $data("lastPF"), 
            $data["linkM"], 
            $data["managedServer"], 
            $data["notes"],
            $host,
            $customer
        );
    }
}