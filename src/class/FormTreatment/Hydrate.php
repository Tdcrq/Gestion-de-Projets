<?php

namespace App\Class\FormTreatment;

use App\Class\Customer;

class Hydrate {

    public static function addCustomer(array $data): Customer
    {
        $code = strtoupper(str_replace(" ", "_", $data[0]));
        return new Customer($code, $data[1], $data[2]);
    }
}
