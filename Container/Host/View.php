<?php
if ($route[1] === "add") {
    require("Container/Host/Insert.php");
} elseif ($route[1] === "modify") {
    require("Container/Host/Update.php");
}