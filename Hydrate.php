<?php
require("src/Require/autoloader.php");
use App\Class\Customer;

class Hydrate {

    private static Customer $customerInValidation;

    public static function addCustomer(Customer $newCustomer): void
    {
        (Hydrate::$customerInValidation = $newCustomer);
    }

    public static function getAttibutsCustomer(): array
    {
        $firstCustomer = Hydrate::$customerInValidation;
        return array($firstCustomer->getCode(), $firstCustomer->getName(), $firstCustomer->getNotes());
    }
}

$code  = $_POST["code"];
$name  = $_POST["name"];
$notes = $_POST["notes"];

$customer = new Customer($code, $name, $notes);
Hydrate::addCustomer($customer);
echo "<br>";
var_dump(Hydrate::getAttibutsCustomer());