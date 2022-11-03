<?php

namespace App\FormTreatment;

use FFI\Exception;
use PDO;

class Insert
{
    public static function Insert(PDO $co, array $data): void
    {
        try {
            $query = $co->prepare("INSERT INTO customer(code, name, notes) VALUES(?, ?, ?)");
            $query->execute([$data[0],$data[1],$data[2]]);
        } catch(Exception $e) {
            $error = $e;
        }
    }
}
