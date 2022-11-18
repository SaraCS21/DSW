<?php
    session_start();

    if (isset($_SESSION["nombres"])){
        print_r($_SESSION);

    } else {
        echo "<p>No existe</p>";
    }
?>