<?php
    if (isset($_REQUEST["enviar"])){
        $color = $_REQUEST["color"];
        setcookie("cookie_color", $color);
    } 

    if (isset($_COOKIE["cookie_color"])){
        $color = $_COOKIE['cookie_color'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background-color: <?= $color ?>">

        <form method="post" action=<?php $_SERVER['PHP_SELF'] ?>>
            <label for="color">Seleccione un color:</label>
            <input type="color" name="color" value="white">
            <input type="submit" name="enviar" value="Enviar">
        </form>
        
    </body>
</html>