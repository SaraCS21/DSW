<?php
    session_name("pagina13");
    session_start();

    echo "<p>El nombre es: " . $_SESSION["nombre"] . "</p>";
    echo "<p>Pincha <a href='./pag13.php'>aquí</a> para ir a la página 13</p>";
?>
