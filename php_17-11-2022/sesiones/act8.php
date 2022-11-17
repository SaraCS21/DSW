<?php
    session_start();
    $_SESSION["nombres"][] = "Sara";
    $_SESSION["nombres"][] = "Juan";
    $_SESSION["nombres"][] = "Carlos";

    print_r($_SESSION);
    echo "<p>Pulsa <a href='./act9.php'>aquí</a></<p>"
?>