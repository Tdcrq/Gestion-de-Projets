<?php
require(__DIR__."/src/Require/autoloader.php");

use App\Class\Host;
use App\Class\Contact;
use App\Class\Customer;
use App\Class\Environment;
use App\Class\Project;

use App\Class\FormTreatment\Hydrate;
if(!isset($_POST[""]))
{
    $data = array("code", "name", "notes");
    Hydrate::addCustomer($data);
    
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
        <link rel="stylesheet" href="css/colors.css">
        <link rel="stylesheet" href="css/index.css">
    </head>

    <body>
        <nav>
            <img class="logo" src="image/logo-mentalworks-blanc.png" alt="ERROR">
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

            <section class="right-section"></section>
        </main>
    </body>

    <footer>
    </footer>
</html>