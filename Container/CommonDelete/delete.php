<?php

require_once("../../vendor/autoload.php");
use App\DB\ConnexionBdd;

$config = new ConnexionBdd();
$co = $config->co();
$id = $_GET["id"];
$route = $_GET["route"];

$route == "cli" ? $route = "customer" : $route = "host";


$query = $co->prepare("SELECT * FROM ? WHERE id = ?");
$query->bindParam('1', $route, PDO::PARAM_STR);
$query->bindParam('2', $id, PDO::PARAM_INT);
var_dump($query);
$query->execute();
$theCustomer = $query->fetchAll();
var_dump($theCustomer);

