<?php

if ($route[1] === "add") {
    require("Container/Customer/Insert.php");
} elseif ($route[1] === "modify") {
    require("Container/Customer/Update.php");
}
