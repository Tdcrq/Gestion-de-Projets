<?php

namespace App\Class\FormTreatment;

use App\Class\Customer;

class Hydrate
{
    public static function addCustomer(array $data): Customer
    {
        $code = Trim($data[0]);
        $code = strtoupper(str_replace(" ", "_", $code));
        return new Customer($code, $data[0], $data[1]);
    }
}
