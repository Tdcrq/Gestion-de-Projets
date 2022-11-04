<?php
var_dump($route);
if ($route[1] === "add") {
    require("Container/Host/Insert.php");
} elseif ($route[1] === "modify") {
    require("Container/Host/Update.php");
}elseif ($route[1] === "view") { ?>
<div>
    <h1 class="title-right-section">Projets</h1>
    <div class="right-contents">
        <div>   
            <table id="tab">
                <tr>
                    <th>
                        NOM
                    </th>
                    <th>
                        CLIENTS
                    </th>
                    <th>
                        HÉBERGEURS
                    </th>
                </tr>
                <!--?php
                    $query = $co->prepare('SELECT * from project');
                    $query->execute();
                    while($row = $query->fetch())
                    {

                    }
                ?-->
            </table>
            <div class="btn-form-bottom">
                <a id="btn-save" type="submit" name="add" href="">+ Ajouter</a>
             </div>      
        </div>
    </div>
</div>

<?php
} ?>