<?php

    $url = $_SERVER["PHP_SELF"];
    $keys = ["name", "password", "submit"];
    $continue = true;

    // En caso de que le demos al botón de acceder...
    if (isset($_POST["submit"])){
        $values = [];

        // Comprobamos que nos pasen las claves que tienen que ser
        if (array_keys($_POST) === $keys){

            // Recorremos los valores introducidos en el formulario
            foreach ($_POST as $key => $value) {

                // En caso de que algún valor sea vacío, inicamos que no queremos continuar
                if($value === ""){
                    $continue = false;
                }

                // Insertamos los valores en un array (sanetizamos los datos)
                $values[$key] = trim(strip_tags($value));
            }

            // En caso de que cumplamos con todas las validaciones anteriores...
            if ($continue){
                // Eliminamos el último elemento del array (que hace referencia al input submit)
                array_pop($values);
                // Creamos la cookie de nuestros valores
                setcookie("values", serialize($values));
                // Refrescamos nuestra página para poder ver los cambios al momentos
                header("Refresh: 0");
            }
        }
    }

    //  En caso de que le demos al botón salir...
    if (isset($_POST["exit"])){
        // Eliminamos la cookie
        setcookie("values", "", time()-60);
        // Refrescamos nuestra página para poder ver los cambios al momentos
        header("Refresh: 0");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Actividad 2</title>
    </head>
    <body class="w-100 mt-5">

        <?php 
            // Si existe nuestra cookie...
            if(isset($_COOKIE["values"])){
                $values = unserialize($_COOKIE["values"]);
                // Pasamos la primera letra del nombre a mayúscula
                $name = ucwords($values['name']);
        ?>

            <!-- Mostramos el mensaje de bienvenida -->
            <p class="w-100 text-center">Bienvenido/a, <strong><?= $name ?></strong></p>
            <form action="<?= $url ?>" method="post" class="w-100 d-flex flex-column align-items-center justify-content-center">
                <input type="submit" name="exit" value="Salir" class="btn btn-danger">
            </form>

        <!-- En el caso de que la cookie no exista... -->
        <?php  } else { ?>
    
            <!-- Mostramos nuestro formulario -->
            <form action="<?= $url ?>" method="post" class="w-100 d-flex flex-column align-items-center justify-content-center">
                <div class="w-50 d-flex align-items-center justify-content-center mb-3">
                    <label for="name" class="w-50 me-3 text-center">Usuario:</label>
                    <input type="text" name="name" class="w-50 form-control text-center">
                </div>    
                
                <div class="w-50 d-flex align-items-center justify-content-center mb-3">
                    <label for="password" class="w-50 me-3 text-center">Contraseña:</label>
                    <input type="password" name="password" class="w-50 form-control text-center">
                </div> 

                <input type="submit" name="submit" value="Acceder" class="btn btn-primary">
            </form>

        <?php } ?>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>