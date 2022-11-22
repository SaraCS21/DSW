<?php
    session_name("pagina13");
    session_start();
    $_SESSION["nombre"] = "Alumno";

    echo "<p>El nombre es: " . $_SESSION["nombre"] . "</p>";
    echo "<p>Pincha <a href='./pag15.php'>aquí</a> para ir a la página 15</p>";
?>
