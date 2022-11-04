<?php
$idProject = $_GET["proj"];
$query = $co->prepare('SELECT * FROM project where id = :id');
$query->bindParam(':id', $idProject);
$query->execute();
$row = $query->fetch();
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
                        <input class="add-user-input" type="text" id="name" name="name" value="<?php echo $row[1]; ?>">
                    </div>
                    <div>
                        <label class="add-user-label" for="code">Code Interne</label>
                        <input class="add-user-input" type="text" id="" name="code"  value="<?php echo $row[2]; ?>" disabled>
                    </div>
                </div>
                <div >
                    <div>
                        <label id="dossierLPLabel" class="add-user-label" for="dossierLP">Dossier Lastpass</label>
                        <input class="add-user-input" type="text" id="dossierLP" name="dossierLP" value="<?php echo $row[3]; ?>">
                    </div>
                    <div>
                        <label id="lienMLabel" class="add-user-label" for="lienM">Lien maquettes</label>
                        <input class="add-user-input" type="text" id="lienM" name="lienM" value="<?php echo $row[4]; ?>">
                    </div>
                </div>
            </div>
            <div>
                <label class="add-user-label" for="client">client <span style="color:red;">*</span></label>
                <select name="client" id="client" class="add-user-input" value="<?php echo $row[8];?>">
                    <?php
                    $query2 = $co->prepare('SELECT * FROM customer where id = :id');
                    $query2->bindParam(":id", $idProject);
                    $query2->execute();

                    $row2 = $query2->fetch();
                    echo "<option value='".$row2['0']."'>".$row2['2']."</option>";

                    $query3 = $co->prepare('SELECT * FROM customer where id <> :id');
                    $query3->bindParam(":id", $idProject);
                    $query3->execute();
                    while($row3 = $query3->fetch())
                    {
                        echo "<option value='".$row3['0']."'>".$row3['2']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label class="add-user-label" for="hebergeur">Hébergeur <span style="color:red;">*</span></label>
                <select name="hebergeur" id="hebergeur" class="add-user-input">
                    <?php
                    $query2 = $co->prepare('SELECT * FROM host where id = :id');
                    $query2->bindParam(":id", $idProject);
                    $query2->execute();

                    $row2 = $query2->fetch();
                    echo "<option value='".$row2['0']."'>".$row2['2']."</option>";

                    $query3 = $co->prepare('SELECT * FROM customer where id <> :id');
                    $query3->bindParam(":id", $idProject);
                    $query3->execute();
                    while($row3 = $query3->fetch())
                    {
                        echo "<option value='".$row3['0']."'>".$row3['2']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label class="add-user-label" for="serveurInfo">Serveur Infogéré</label>
                <input type="checkbox" id="serveurInfo" name="serveurInfo" class="input-checkbox" 
                <?php 
                if($row['5'] == 1){
                    echo "checked";
                }
                ?>

            </div>
            <div>
                <label class="add-user-label" for="note">Notes / Remarques</label>
                <textarea class="add-user-textarea add-user-input" id="note" name="note"><?php echo $row[6]; ?></textarea>    
            </div>
            <div class="btn-form-bottom">
                <input id="btn-cancel" type="reset" name="annuler" value="Annuler">
                <input id="btn-save" type="submit" name="update" value="Sauvegarder">
            </div>
        </form>
    </div>
</div>
