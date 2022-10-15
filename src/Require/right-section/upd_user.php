<h1 class="title-right-section">Nouveau client</h1>

<div>
    <a class='btn-form-top' href="">Informations générales</a>
    <a class='btn-form-top' id="contacts" href="">Contacts</a>
</div>
<div class="right-contents">
    <div>
        <form class="add-user-form" method="post">
            <div>
                <label class="add-user-label" for="name">Nom</label>
                <select class="add-user-input" type="text" id="name" name="name">
                    <?php
                    $query = $co->prepare('SELECT * from customer');
                    $query->execute();
                    $fetch_customer = $query->fetchAll();
                    foreach ($fetch_customer as $customer)
                    {
                        echo "<option value='". $customer["id"] ."'>". $customer["name"] ."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label class="add-user-label" for="code">Code Interne</label>
                <input class="add-user-input" type="text" id="code" name="code" placeholder="Champ généré automatiquement" disabled>
            </div>
            <div>
                <label class="add-user-label" for="name">Notes / Remarques</label>
                <textarea class="add-user-textarea add-user-input"id="note" name="note">
                    
                </textarea>    
            </div>
            <div class="btn-form-bottom">
                <input id="btn-cancel" type="submit" placeholder="Annuler">
                <input id="btn-save" type="submit" placeholder="Sauvegarder">
            </div>
        </form>
    </div>
</div>