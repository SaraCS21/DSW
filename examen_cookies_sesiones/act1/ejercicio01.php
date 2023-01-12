<?php
    session_start();
    require "functions.php";

    // Creamos nuestra sesión (en caso de ya estar creada la dejamos como está)
    $_SESSION["values"] = isset($_SESSION["values"]) ? $_SESSION["values"] : [];

    // Si le damos al botón de enviar valor y el input no está vacío...
    if (isset($_POST["send"]) && $_POST["number"] !== ""){
        // Insetamos el número en el array de la sesión
        array_push($_SESSION["values"], $_POST["number"]);
    }

    // En caso de que le demos al botón iniciar...
    if (isset($_POST["start"])){
        // Mantenemos nuestra sesión pero reseteamos los datos
        $_SESSION["values"] = [];

    // En caso de que le demos al botón finalizar...
    } else if (isset($_POST["end"])){
        // Eliminamos nuestra sesión y reseteamos los datos
        session_destroy();
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
        <title>Actividad 1</title>
    </head>
    <body class="w-100 mt-5">
        <form method="post" class="w-100 d-flex flex-column align-items-center justify-content-center">
            <div class="w-50 d-flex align-items-center justify-content-center">
                <label for="number" class="w-50 me-3 text-center">Valor a introducir</label>
                <input type="number" name="number" class="w-50 form-control text-center">
            </div>

            <div class="w-50 mt-5 d-flex align-items-center justify-content-center">
                <input type="submit" name="send" value="Enviar valor" class="btn btn-warning me-3">
                <input type="submit" name="calculate" value="Calcular" class="btn btn-warning me-3">
                <input type="submit" name="start" value="Iniciar" class="btn btn-warning me-3">
                <input type="submit" name="end" value="Finalizar" class="btn btn-warning">
            </div>

        </form>

        <?php 

            // En caso de darle al botón calcular mostramos los datos...
            if (isset($_POST["calculate"]) && $_SESSION["values"] !== []){ 
                echo "<p class='mt-5'><strong>Número de valores totales introducidos: </strong>" . num_values() . "</p>";
                echo "<p><strong>Número de pares totales: </strong>" . num_par() . "</p>";
                echo "<p><strong>Mayor número par: </strong>" . num_par_bigger() . "</p>";
                echo "<p><strong>Suma números pares: </strong>" . num_par_sum() . "</p>";
                echo "<p><strong>Suma números impares: </strong>" . num_impar_sum() . "</p>";
                echo "<p><strong>Media números pares: </strong>" . num_par_media() . "</p>";
                echo "<p><strong>Media números impares: </strong>" . num_impar_media() . "</p>";
                echo "<p><strong>Listado de los valores introducidos: </strong></p>"; 
                print_r($_SESSION["values"]);
            } 
        ?>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>