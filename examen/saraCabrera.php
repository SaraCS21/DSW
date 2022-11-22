<?php require "./functions/functions.php" ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <?php
        echo "<h3>Actividad 4</h3>";

        // En caso de venir del formulario...
        if(isset($_REQUEST["submit"]) && validate()){

            // ucfirst -> Pasamos la primera letra del nombre a mayúscula
            // trim -> Eliminamos los posibles espacios en blanco al principio y final
            // strip_tags -> Eliminamos las posibles etiquetas html que nos pasen
            $name = ucfirst(trim(strip_tags($_REQUEST["name"])));
            $phone = trim(strip_tags($_REQUEST["phone"]));

            // Mostramos los datos del formulario
            echo "<p>$name, nos pondremos en contacto con usted lo antes posible al teléfono: $phone</p>";

        // En caso de no venir del formulario...
        } else {
    ?>
        <form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="name" placeholder="Nombre">
            <input type="tel" name="phone" placeholder="Teléfono">
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php
        }
    ?>
    
    </body>
</html>