<?php 
    session_start();
    $nombre = $_SESSION["nombre"];
    $valor = $_SESSION["valor"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            echo "<p>Nombre: $nombre</<p>";
            echo "<p>Valor: $valor</<p>";
        ?>
    </body>
</html>