<?php

namespace App\FormTreatment;

use App\Classes\Customer;
use App\Classes\Project;
use App\Classes\Host;

class Hydrate
{
    public static function treatmentCodeName(string $n): array
    {
        $code = $name = Trim($n);
        $code = strtoupper(str_replace(" ", "_", $code));
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
        $temp = Hydrate::treatmentCodeName($data["name"]);
        return new Project($temp["name"], $temp["code"], $data("lastPF"), $data["linkM"], $data["managedServer"], $data["notes"], new Host("", "", ""), new Customer("", "", ""));
    }
}
