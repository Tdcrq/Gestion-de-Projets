<?php

require_once("../../vendor/autoload.php");
use App\DB\ConnexionBdd;

$config = new ConnexionBdd();
$co = $config->co();
$id = $_GET["id"];
$route = $_GET["route"];
$route == "cli" ? $route = "customer" : $route = "host";
if ($route == "host") {
    $query = $co->prepare("DELETE FROM host WHERE id = ?");
} elseif ($route == "customer") {
    $query = $co->prepare("DELETE FROM customer WHERE id = ?");
}
$query->execute([intval($id)]);

setcookie('route','dash');
header('Location: ../../../');