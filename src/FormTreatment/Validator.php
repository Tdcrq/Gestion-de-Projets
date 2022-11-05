<?php

namespace App\FormTreatment;

use App\Classes\Customer;
use App\Classes\Project;
use App\Classes\Host;

class Validator
{
    private static function inputSecurityFunction(string $data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function inputVerificationFunction(?Customer $customerInValidation, ?Host $hostInValidation): array
    {
        $isValid = true;
        if ($customerInValidation != null) {
            $objectInValidation = $customerInValidation;
        } elseif ($hostInValidation != false) {
            $objectInValidation = $hostInValidation;
        } else {
            return array(
                false,
                "Erreur servre lors de l'envoie du formulaire"
            );
        }
        $code  = Validator::inputSecurityFunction($objectInValidation->getCode());
        $name  = Validator::inputSecurityFunction($objectInValidation->getName());
        $notes = Validator::inputSecurityFunction($objectInValidation->getNotes());

        if (strlen($name) == 0 || strlen($name) > 255) {
            $isValid = false;
            $errorMsg = "Le nom doit contenir 1-255 caractère(s).\n";
        }

        if (strlen($name) > 1000) {
            $isValid = false;
            $errorMsg = $errorMsg + "Notes doit contenir un maximum de 1000 caractère(s).\n";
        }

        if ($isValid == true) {
            return array(
                $code,
                $name,
                $notes
            );
        } else {
            return array(
                $isValid,
                $errorMsg
            );
        }
    }
}
