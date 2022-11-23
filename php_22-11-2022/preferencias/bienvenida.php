<?php
    if (!isset($_COOKIE["values"])){
        Header("Location: index.php");
    }

    if (isset($_REQUEST["delete"])){
        setcookie("values", "", time()-60);
    }

    $values = unserialize($_COOKIE['values']);

    $background = $values['background']; 
    $letter_color = $values['letter_color'];     
    $letter = $values['letter'];  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <title>Bienvenida</title>
    </head>
    <body style="background: <?= $background ?>">
    
        <?php
            echo "<p style='color: $letter_color; font-family: $letter;' class='text-center w-100 mt-5 fs-3'>";

            if ($values["languaje"] === "ingles"){
                echo "Welcome ";

            } else {
                echo "Bienvenido/a ";
            }

            echo $values["name"] . " " . $values["surname"] . "</p>";
        ?>

        <form method="post" class="w-100 mt-5 d-flex flex-column justify-content-center align-items-center">
            <button type="submit" name="delete" class="btn btn-primary">Eliminar preferencias</button>
        </form>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>