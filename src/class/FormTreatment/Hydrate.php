<?php

namespace App\Class\FormTreatment;

use App\Class\Customer;

class Hydrate {

    public static function addCustomer(array $data): Customer
    {
        return new Customer($data[0], $data[1], $data[2]);
    }
}