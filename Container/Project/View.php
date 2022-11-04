<?php
if ($route[1] === "Insert") {
    require("Container/Project/Insert.php");
} elseif ($route[1] === "Update") {
    require("Container/Project/Update.php");
} elseif ($route[1] === "view") {
    ?>
<div>
    <h1 class="title-right-section">Projets</h1>
    <div class="right-contents">
        <div>   
            <table id="tab" class="table">
                <tr>
                    <th class="th">
                        NOM
                    </th>
                    <th class="th">
                        CLIENTS
                    </th>
                    <th class="th">
                        HÉBERGEURS
                    </th>
                </tr>
                <?php
                        $query = $co->prepare(
        'SELECT *
                        FROM host H, customer C, project P
                        WHERE C.id = P.customer_id
                        AND H.id = P.host_id'
    );
    $query->execute();

    while ($row = $query->fetch()) {
        echo "<tr onClick='modify($row[8])'>";
        echo"<td class='td'>".$row['9']."</td>";
        echo"<td class='td'>".$row['6']."</td>";
        echo"<td class='td'>".$row['2']."</td>";
        echo"</tr>";
    }
    ?>
            </table>
            <div class="btn-form-bottom">
                <a id="btn-save" type="submit" name="add" onClick="Insert()">+ Ajouter</a>
                </div>      
        </div>
    </div>
</div>
<?php
}
?>
