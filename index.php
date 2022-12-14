<?php
require(__DIR__."/vendor/autoload.php");

use App\DB\ConnexionBdd;

$config = new ConnexionBdd();
$co = $config->co();
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
        <link rel="stylesheet" href="public/css/app.css">
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

                    <div class="layout project">
                        <i class="fa-solid fa-circle-user"></i>
                        PROJETS
                    </div>

                    <div class="layout clients">
                        <i class="fa-solid fa-book"></i>
                        CLIENTS
                    </div>

                    <div class="layout heberg">
                        <i class="fa-regular fa-square-check"></i>
                        HÉBERGEURS
                    </div>
                </div>
            </section>

            <section class="right-section">
                <?php
                if (isset($_COOKIE["route"])) {
                    $route = explode('/', $_COOKIE["route"]);
                    switch ($route[0]) {
                        case 'dash':
                            require("Container/Dashboard/index.php");
                            break;
                        case 'project':
                            require("Container/Project/View.php");
                            break;
                        case 'Heberg':
                            require("Container/Host/View.php");
                            break;
                        case 'Clients':
                            require("Container/Customer/View.php");
                            break;
                    }
                } else {
                    require('Container/Dashboard/index.php');
                }
                ?>
            </section>
        </main>
        <div id="cliModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <label class="add-user-label" for="id_customer">Nom</label>
                    <select class="add-user-input" type="text" id="id_customer" name="name">
                        <option value=""></option>
                        <?php
                        $query = $co->prepare('SELECT * from customer');
                        $query->execute();
                        $fetch_customer = $query->fetchAll();
                        foreach ($fetch_customer as $customer) {
                        echo "<option value='". $customer["id"] ."'>". $customer["name"] ."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="btn-con">
                    <p class="actionModal bn19">Modifier</p>
                    <p class="supModal bn19 cli">Supprimer</p>
                    <fieldset>
                        <legend>Etes vous sur ?</legend>

                        <div>
                            <input type="radio" id="ouiCli" name="supCli" value="true">
                            <label for="oui">oui</label>
                        </div>

                        <div>
                        <input type="radio" id="non" name="supCli" value="false" checked> 
                        <label for="non">non</label>
                        </div>

                    </fieldset>
                </div>
                <p class="actionModal bn19">Ajouter</p>
            </div>
        </div>
        <div id="heModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <label class="add-user-label" for="id_host">Hébergeur</label>
                    <select class="add-user-input" type="text" id="id_host" name="name">
                        <option value=""></option>
                        <?php
                        $query = $co->prepare('SELECT * from host');
                        $query->execute();
                        $fetch_host = $query->fetchAll();
                        foreach ($fetch_host as $host) {
                        echo "<option value='". $host["id"] ."'>". $host["name"] ."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="btn-con">
                    <p class="actionModal bn19">Modifier</p>
                    <p class="supModal bn19 he">Supprimer</p>
                    <fieldset>
                        <legend>Etes vous sur ?</legend>

                        <div>
                            <input type="radio" id="ouiHe" name="supHe" value="true">
                            <label for="oui">oui</label>
                        </div>

                        <div>
                        <input type="radio" id="non" name="supHe" value="false" checked> 
                        <label for="non">non</label>
                        </div>

                    </fieldset>
                </div>
                <p class="actionModal bn19">Ajouter</p>
        </div>
    </body>

    <script src="public/js/modal.js"></script>
    <!-- <script src="public/js/cookie_project.js"></script> -->

    <footer>
    </footer>
</html>