<?php

namespace App\Class\FormTreatment;

use App\Class\Customer;

class Validator {

    private static function inputSecurityFunction(string $data):string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function inputVerificationFunction(Customer $customerInValidation): array
    {
        $code  = Validator::inputSecurityFunction($customerInValidation->getCode());
        $name  = Validator::inputSecurityFunction($customerInValidation->getName());
        $notes = Validator::inputSecurityFunction($customerInValidation->getNotes());
        $isValid = true;

        if(strlen($name) == 0 || strlen($name) > 255)
        {
            $isValid = false;
            $errorMsg = "Le nom doit contenir 1-255 caractère(s).\n";
        }

        if(strlen($name) > 1000)
        {
            $isValid = false;
            $errorMsg = $errorMsg + "Notes doit contenir un maximum de 1000 caractère(s).\n";
        }

        if($isValid == true)
        {
            return array(
                $code,
                $name,
                $notes
            );
        } 
        else
        {
            return array(
                $isValid,
                $errorMsg
            );
        }
    }
}
