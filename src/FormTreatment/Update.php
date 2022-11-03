<?php

namespace App\FormTreatment;

use FFI\Exception;
use PDO;

class Update
{
    public static function UpdateCustomer(PDO $co, array $data, int $id): void
    {
        try {
            $query = $co->prepare("UPDATE customer SET code=?, name=?, notes=? WHERE id=?");
            $query->execute([$data[0], $data[1], $data[2], $id]);
        } catch(Exception $e) {
            $error = $e;
        }
    }
}
