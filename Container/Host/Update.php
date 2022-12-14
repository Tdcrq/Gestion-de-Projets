<?php

use App\FormTreatment\Hydrate;
use App\FormTreatment\Validator;
use App\FormTreatment\Update;

$error = "";
$id_host = $_GET["id"];

$query = $co->prepare("SELECT * FROM host WHERE id = ?");
$query->execute([$id_host]);
$thehost = $query->fetchAll();

foreach ($thehost as $host) {
    $current_name = $host["name"];
    $current_code = $host["code"];
    $current_notes = $host["notes"];
}

if (isset($_POST["update"])) {
    $notes = $_POST["notes"];
    $name = $_POST["name"];
    $data = [
        "notes" => $notes,
        "name" => $name];
    $host = Hydrate::hydrateHost($data);
    $verifHost = Validator::inputVerificationFunction(null, $host);
    if ($verifHost[0] == false) {
        $error = $verifHost[1];
    } else {
        Update::UpdateHost($verifHost, $id_host);
        setcookie('route','dash');
        header('Location: ./');
       
    }
}
?>

<div id="update">
    <h1 class="title-right-section" id="old_name"></h1>

    <div>
        <a class='btn-form-top' href="">Informations générales</a>
        <a class='btn-form-top' id="contacts" href="">Contacts</a>
    </div>
    <div class="right-contents">
        <div>
            <form class="add-user-form" method="post" name="upd_user">
                <p class="error">
                    <?php
                    echo $error;
                    ?>
                </p>
                <div>
                    <label class="add-user-label" for="name">Nom <span style="color:red;">*</span></label>
                    <input class="add-user-input" type="text" id="name" name="name" value="<?php echo $current_name; ?>">
                </div>
                <div>
                    <label class="add-user-label" for="code">Code Interne</label>
                    <input class="add-user-input" type="text" id="" name="code"  value="<?php echo $current_code; ?>" disabled>
                </div>
                <div>
                    <label class="add-user-label" for="notes">Notes / Remarques</label>
                    <textarea class="add-user-textarea add-user-input" id="notes" name="notes"><?php echo $current_notes; ?></textarea>    
                </div>
                <div class="btn-form-bottom">
                    <input id="btn-cancel" type="reset" name="annuler" value="Annuler">
                    <input id="btn-save" type="submit" name="update" value="Sauvegarder">
                </div>
            </form>
        </div>
    </div>
</div>
