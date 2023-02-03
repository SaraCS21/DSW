<?php
    require "./functions.php";

    deleteUser($_REQUEST["id"]);

    echo create_table();
?>