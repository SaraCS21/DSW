<?php
    session_name("pagina12");
    session_start();
    $_SESSION["nombre"] = "Profesor";

    echo "<p>El nombre es: " . $_SESSION["nombre"] . "</p>";
    echo "<p>Pincha <a href='./pag14.php'>aquí</a> para ir a la página 14</p>";
?>

