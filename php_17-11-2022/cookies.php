<?php
    if (isset($_REQUEST["enviar"])){
        $name = $_REQUEST["name"];
        $surname = $_REQUEST["surname"];
        $age = $_REQUEST["age"];

        $datos = [$name, $surname, $age];
        setcookie("datos", serialize($datos));
    } 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cookies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <?php
            if (isset($_COOKIE["datos"])){
                $datos = unserialize($_COOKIE['datos']);

                print <<<END
                    <p>Nombre: $datos[0]</p>
                    <p>Apellidos: $datos[1]</p>
                    <p>Edad: $datos[2]</p>
                END;
            } else {
        ?>

        <form method="post" action=<?php $_SERVER['PHP_SELF'] ?>>
            <label for="name">Nombre:</label>
            <input type="text" name="name">
            <label for="surname">Apellidos:</label>
            <input type="text" name="surname">
            <label for="age">Edad:</label>
            <input type="numeric" name="age">
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php } ?>
    </body>
</html>