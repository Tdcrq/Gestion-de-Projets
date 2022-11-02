<?php
require(__DIR__."/vendor/autoload.php");

use App\Class\Host;
use App\Class\Contact;
use App\Class\Customer;
use App\Class\Environment;
use App\Class\Project;
use App\DB\ConnexionBdd;
use App\Class\FormTreatment\Hydrate;
use App\Class\FormTreatment\Validator;
use App\Class\FormTreatment\Insert;
use App\Class\FormTreatment\Update;


<<<<<<< HEAD
$query = $co->prepare('SELECT * from customer');
$query->execute();
$fetch_customer = $query->fetchAll();

$error = "";

if (isset($_POST["add"])) {
    $data = array(
        $_POST["name"],
        $_POST["note"]
    );
    $customer = Hydrate::addCustomer($data);
    $validator = Validator::inputVerificationFunction($customer);
    if (gettype($validator[0]) === "string") {
        Insert::Insert($co, $validator);
    } else {
        $error = $validator[1];
    }
}

if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $note = $_POST["note"];
    $id = $_COOKIE["id_customer"];

    $data = array(
        $name,
        $note
    );

    $customer = Hydrate::addCustomer($data);
    $validator = Validator::inputVerificationFunction($customer);
    if (gettype($validator[0]) === "string") {
        Update::UpdateCustomer($co, $validator, $id);
        header("Refresh:0");
    } else {
        $error = $validator[1];
    }
}
=======
>>>>>>> 67ee876 (init / fix autoloader pour faire le front / JS)
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
        <!-- JS -->
        <script src="public/js/getData/getCode.js"></script>
        <script src="public/js/getData/getName.js"></script>
        <script src="public/js/getData/getNotes.js"></script>
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
<<<<<<< HEAD
                <?php
                require("src/Require/right-section/upd_user.php");
require("src/Require/right-section/add_user.php");
?>
=======
             
>>>>>>> 67ee876 (init / fix autoloader pour faire le front / JS)
            </section>
        </main>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <label class="add-user-label" for="id_customer">Nom</label>
                    <select class="add-user-input" type="text" id="id_customer" name="name" onchange="showCode(this.value), showName(this.value), showNotes(this.value)">
                        <option value=""></option>
                        <?php
        foreach ($fetch_customer as $customer) {
            echo "<option value='". $customer["id"] ."'>". $customer["name"] ."</option>";
        }
?>
                    </select>
                </div>
                <p class="actionModal bn19">Modifier</p>
                <p class="actionModal bn19">Ajouter</p>
            </div>
        </div>
    </body>

    <script src="public/js/modal.js"></script>
    <script src="public/js/check_cookie.js"></script>

    <footer>
    </footer>
</html>