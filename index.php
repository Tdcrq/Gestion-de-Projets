<?php
require(__DIR__."/src/Require/autoloader.php");

use App\Class\Host;
use App\Class\Contact;
use App\Class\Customer;
use App\Class\Environment;
use App\Class\Project;
use App\Class\DB\ConnexionBdd;
use App\Class\FormTreatment\Hydrate;
use App\Class\FormTreatment\Validator;
use App\Class\FormTreatment\Insert;

$config = new ConnexionBdd();
$co = $config->co();

$error = "";

if(isset($_POST["add"]))
{
    $data = array(
        $_POST["name"], 
        $_POST["note"]
    );
    $customer = Hydrate::addCustomer($data);
    $validator = Validator::inputVerificationFunction($customer);
    if(gettype($validator[0]) === "string")
    {
        Insert::Insert($co, $validator);
    }else{
        $error = $validator[1];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- ICON -->
        <script src="https://kit.fontawesome.com/96626c594d.js" crossorigin="anonymous"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="public/css/colors.css">
        <link rel="stylesheet" href="public/css/index.css">
        <script src="public/js/getCode.js"></script>
    </head>

    <body>
        <nav>
            <img class="logo" src="public/image/logo-mentalworks-blanc.png" alt="ERROR">
            <i class="nav-icon fa-solid fa-bars"></i>
        </nav>

        <main>
            <section class="left-section">
                <div class="layouts">
                    <div class="layout dashboard">
                        <i class="fa-sharp fa-solid fa-house-chimney"></i>
                        TABLEAU DE BORD
                    </div>

                    <div class="layout">
                        <i class="fa-solid fa-circle-user"></i>
                        PROJETS
                    </div>

                    <div class="layout">
                        <i class="fa-solid fa-book"></i>
                        CLIENTS
                    </div>

                    <div class="layout">
                        <i class="fa-regular fa-square-check"></i>
                        HÉBERGEURS
                    </div>
                </div>
            </section>

            <section class="right-section">
                <?php
                require"src/Require/right-section/upd_user.php";
                ?>
            </section>
        </main>
    </body>

    <footer>
    </footer>
</html>