<?php
    if (!isset($_COOKIE["values"])){
        Header("Location: index.php");
    }

    if (isset($_REQUEST["delete"])){
        Header("Location: index.php");
    }

    $values = unserialize($_COOKIE['values']);

    $background = $values['background']; 
    $letter_color = $values['letter_color'];     
    $letter = $values['letter'];  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="background: <?= $background ?>">
    
        <?php
            echo "<p style='color: $letter_color; font-family: $letter;'>";

            if ($values["languaje"] === "ingles"){
                echo "Welcome ";

            } else {
                echo "Bienvenido/a ";
            }

            echo $values["name"] . " " . $values["surname"] . "</p>";
        ?>

        <button type="submit" name="delete" class="btn btn-primary">Eliminar preferencias</button>

    </body>
</html>