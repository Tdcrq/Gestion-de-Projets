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

$query = $co->prepare('SELECT * from customer');
$query->execute();
$fetch_customer = $query->fetchAll();

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

if(isset($_POST["update"]))
{
    echo "oui";
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
        <!-- JS -->
        <script src="public/js/getCode.js"></script>
        <script src="public/js/getName.js"></script>
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
                require"src/Require/right-section/upd_user.php";
                ?>
            </section>
        </main>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <label class="add-user-label" for="name">Nom</label>
                    <select class="add-user-input" type="text" id="name" name="name" onchange="showCode(this.value), showName(this.value)">
                        <option value=""></option>
                        <?php
                        foreach ($fetch_customer as $customer)
                        {
                            echo "<option value='". $customer["id"] ."'>". $customer["name"] ."</option>";
                        }
                        ?>
                    </select>
                </div>
                <p class="actionModal">Modifier</p>
                <p class="actionModal">Ajouter</p>
            </div>
        </div>
    </body>

    <script>
        let currentBtn = document.querySelector('.clients');

        let modal = document.getElementById("myModal");
        let actionModalList = document.querySelectorAll('.actionModal');
        let spanModal = document.getElementsByClassName("close")[0];

        console.log(modal.innerHTML);
        currentBtn.addEventListener('click', () => {
            modal.style.display = "block";
        });

        spanModal.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

        actionModalList[0].addEventListener('click', () =>{
            document.cookie = "route=Clients/modify";
            console.log(document.cookie);
        }) 
        actionModalList[1].addEventListener('click', () =>{
            document.cookie = "route=Clients/add";
            console.log(document.cookie);
        }) 
    </script>

    <footer>
    </footer>
</html>