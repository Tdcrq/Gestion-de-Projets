<?php

namespace App\FormTreatment;

use App\Classes\Customer;
use App\Classes\Project;
use App\Classes\Host;
use App\DB\ConnexionBdd;

class Hydrate
{
    public static function treatmentCodeName(string $n): array {
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

    public static function hydrateHost(array $data): Host{
        $temp = Hydrate::treatmentCodeName($data["name"]);
        return new Host($temp["code"], $temp["name"], $data["notes"]);
    }

    public static function hydrateProject(array $data): Project {
        $config = new ConnexionBdd();
        $co = $config->co();
        // $id_custom = $data["id_customer"];
        // $customer = $co->prepare("SELECT * FROM customer WHERE id = ?");
        // $customer->execute([$id_custom]);

        // !---------------------! HUGO ENVOIE UN ID !---------------------! //
        $id_customer = $data["id_customer"];
        $id_host = $data["id_host"];

        $c = $co->prepare("SELECT * FROM customer WHERE id = :id");
        $c->bindParam('id', $id_customer);
        $c->execute();
        $c = $c->fetchAll();
        foreach ($c as $customer) {
            $name_customer = $customer["name"];
            $notes_customer = $customer["notes"];
        }
        $data_customer = [
            "notes" => $notes_customer,
            "name" => $name_customer
        ];
        $customer = Hydrate::hydrateCustomer($data_customer);

        $h = $co->prepare("SELECT * FROM host WHERE id = :id");
        $h->bindParam('id', $id_host);
        $h->execute();
        $h = $h->fetchAll();
        // !--------------------!    FIN ESSAIE      !---------------------!//

        $temp = Hydrate::treatmentCodeName($data["name"]);
        return new Project($temp["name"], $temp["code"], $data("lastPF"), $data["linkM"], $data["managedServer"], $data["notes"], new Host("","",""), new Customer("","",""));
    }
}