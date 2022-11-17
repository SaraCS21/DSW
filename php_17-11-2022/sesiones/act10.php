<?php
    session_start();
    $_SESSION["nombres"][] = "Sara";
    session_destroy();
    
    if (isset($_SESSION["nombres"])){
        print_r($_SESSION);

    } else {
        echo "<p>No existe</p>";
    }

    echo "<p>Pulsa <a href='./act11.php'>aquí</a></<p>"
?>