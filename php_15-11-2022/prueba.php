<?php setcookie("visitas", "1"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Cookies</title>
    </head>
    <body>
        <?php
            if (isset($_COOKIE["visitas"])){
                $valor = $_COOKIE["visitas"] + 1;
                setcookie("visitas", $valor);
    
                echo "Visita número " . $_COOKIE["visitas"];

            } else {
                echo "Visita número 0";
            }
        ?>
    </body>
</html>