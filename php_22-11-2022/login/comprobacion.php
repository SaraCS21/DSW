<?php
    session_start();

    if ($_SESSION["password"] !== "A1s2d3f4g5"){
        $name = $_SESSION["name"];
        $surname = $_SESSION["surname"];
        $password = "Contraseña incorrecta";

    } else {
        $name = "";
        $surname = "";
        $password = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <title>Comprobación Login</title>
    </head>
    <body>
    
        <?php
            if ($_SESSION["password"] === "A1s2d3f4g5"){
                echo "<p class='w-100 text-center mt-4'>Datos correctos</p>";
            } else {
        ?>

        <form method="post" class="w-100 mt-5 d-flex flex-column justify-content-center align-items-center">
            <div class="mb-3 w-50">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" value="<?= $name ?>">
            </div>
            <div class="mb-3 w-50">
                <label for="surname" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="surname" value="<?= $surname ?>">
            </div>
            <div class="mb-3 w-50">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="<?= $password ?>">
            </div>
            <input type="submit" name="submit" value="Enviar" class="btn btn-primary">
        </form>

        <?php } ?>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>