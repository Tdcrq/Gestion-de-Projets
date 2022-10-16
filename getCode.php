<?php
require(__DIR__."/src/Require/autoloader.php");

use App\Class\DB\ConnexionBdd;

$config = new ConnexionBdd();
$co = $config->co();

$q = intval($_GET['q']);

if (!$co) {
  die('Could not connect: ');
}


$query = $co->prepare("SELECT code FROM customer WHERE id = '".$q."'");
$query->execute();
$codes = $query->fetchAll();

foreach($codes as $code)
{
    echo $code["code"];
}