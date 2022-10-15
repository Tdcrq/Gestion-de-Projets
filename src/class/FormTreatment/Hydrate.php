<?php

namespace App\Class\FormTreatment;

use App\Class\Customer;

class Hydrate {

    private static Customer $customerInValidation;

    public static function addCustomer(array $data): void
    {
        Hydrate::$customerInValidation = new Customer($data[0], $data[1], $data[2]);
    }

    public static function getAttibutsCustomer(): array
    {
        return array(
            Hydrate::$customerInValidation->getCode(), 
            Hydrate::$customerInValidation->getName(), 
            Hydrate::$customerInValidation->getNotes()
        );
    }
}