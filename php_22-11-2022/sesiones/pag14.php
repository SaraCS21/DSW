<?php
    session_name("pagina12");
    session_start();

    echo "<p>El nombre es: " . $_SESSION["nombre"] . "</p>";
    echo "<p>Pincha <a href='./pag12.php'>aquí</a> para ir a la página 12</p>";
?>
