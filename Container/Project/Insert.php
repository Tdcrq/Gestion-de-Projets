<?php
// TEST //
// use App\FormTreatment\Hydrate;
// try {
//     $test = Hydrate::hydrateProject([
//         "name" => "name_project",
//         "code" => "code_project",
//         "lastPF" => "lestPF",
//         "linkM" => "linkM",
//         "managedServer" => "managedServer",
//         "notes" => "notes_project",
//         "id_customer" => "1",
//         "id_host" => "1"
//     ]);
// } catch (Error $e) {
//     echo "error";
// }
?>
<div>
    <h1 class="title-right-section">Nouveau projets</h1>
<div>
    <a class='btn-form-top' href="">Informations générales</a>
    <a class='btn-form-top' id="contacts" href="">environnements</a>
</div>
<div class="right-contents">
    <div>
        <form class="add-user-form" method="post" name="upd_user">
            <div class="flexRow">
                <div>
                    <div>
                        <label class="add-user-label" for="name">Nom <span style="color:red;">*</span></label>
                        <input class="add-user-input" type="text" id="name" name="name">
                    </div>
                    <div>
                        <label class="add-user-label" for="code">Code Interne</label>
                        <input class="add-user-input" type="text" id="" name="code"  value="Généré automatiquement" disabled>
                    </div>
                </div>
                <div >
                    <div>
                        <label id="dossierLPLabel" class="add-user-label" for="dossierLP">Dossier Lastpass</label>
                        <input class="add-user-input" type="text" id="dossierLP" name="dossierLP">
                    </div>
                    <div>
                        <label id="lienMLabel" class="add-user-label" for="lienM">Lien maquettes</label>
                        <input class="add-user-input" type="text" id="lienM" name="lienM">
                    </div>
                </div>
            </div>
            <div>
                <label class="add-user-label" for="client">client <span style="color:red;">*</span></label>
                <select name="client" id="client" class="add-user-input">
                    <option value="">--list des clients--</option>
                    <?php
                    $query = $co->prepare('SELECT * FROM customer');
                    $query->execute();
                    while ($row = $query->fetch()) {
                        echo "<option value='".$row['0']."'>".$row['2']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label class="add-user-label" for="hebergeur">Hébergeur <span style="color:red;">*</span></label>
                <select name="hebergeur" id="hebergeur" class="add-user-input">
                    <option value="">--list des hébergeur--</option>
                    <?php
                    $query = $co->prepare('SELECT * FROM host');
                    $query->execute();
                    while ($row = $query->fetch()) {
                        echo "<option value='".$row['0']."'>".$row['2']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label class="add-user-label" for="serveurInfo">Serveur Infogéré</label>
                <input type="checkbox" id="serveurInfo" name="serveurInfo" class="input-checkbox">
            </div>
            <div>
                <label class="add-user-label" for="note">Notes / Remarques</label>
                <textarea class="add-user-textarea add-user-input" id="note" name="note"></textarea>    
            </div>
            <div class="btn-form-bottom">
                <input id="btn-cancel" type="reset" name="annuler" value="Annuler">
                <input id="btn-save" type="submit" name="update" value="Sauvegarder">
            </div>
        </form>
    </div>
</div>
