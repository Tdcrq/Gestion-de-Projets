<?php

use App\FormTreatment\Hydrate;
use App\FormTreatment\Validator;
use App\FormTreatment\Insert;

$error ="";
if (isset($_POST["add"])) {
    $notes = $_POST["notes"];
    $name = $_POST["name"];
    $data = [
        "notes" => $notes,
        "name" => $name];
    $customer = Hydrate::hydrateCustomer($data);
    $verifCustomer = Validator::inputVerificationFunction($customer, null);
    if ($verifCustomer[0] == false) {
        $error = $verifCustomer[1];
    } else {
        Insert::InsertCustomer($verifCustomer);
    }
}
?>
<div id="add">
    <h1 class="title-right-section">Nouveau client</h1>

    <div>
        <a class='btn-form-top' href="">Informations générales</a>
        <a class='btn-form-top' id="contacts" href="">Contacts</a>
    </div>
    <div class="right-contents">
        <div>
            <form class="add-user-form" method="post">
                <p class="error">
                    <?php
                    echo $error;
                    ?>
                </p>
                <div>
                    <p class="error"><?php //echo $error;?></p>
                    <label class="add-user-label" for="name">Nom</label>
                    <input class="add-user-input" type="text" id="name" name="name">
                </div>
                <div>
                    <label class="add-user-label" for="code">Code Interne</label>
                    <input class="add-user-input" type="text" id="code" name="code" placeholder="Champ généré automatiquement" disabled>
                </div>
                <div>
                    <label class="add-user-label" for="name">Notes / Remarques</label>
                    <textarea class="add-user-textarea add-user-input"id="note" name="note"></textarea>    
                </div>
                <div class="btn-form-bottom">
                    <input id="btn-cancel" type="submit" value="Annuler">
                    <input id="btn-save" type="submit" name="add" value="Sauvegarder">
                </div>
            </form>
        </div>
    </div>
</div>