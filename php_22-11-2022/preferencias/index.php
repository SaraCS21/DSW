<?php
    if (isset($_REQUEST["submit"])){
        $values = [];

        foreach ($_REQUEST as $key => $value) {
            $values[$key] = $_REQUEST[$key];
        }   

        setcookie("values", serialize($values));
        Header("Location: bienvenida.php");
    } 

    if (isset($_COOKIE["values"])){
        Header("Location: bienvenida.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <title>Grabado de Preferencias</title>
    </head>
    <body>

        <form method="post" class="w-100 mt-5 d-flex flex-column justify-content-center align-items-center">
            <div class="mb-3 w-50">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3 w-50">
                <label for="surname" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="surname">
            </div>
            <div class="mb-3 w-50">
                <label for="background" class="form-label">Color de fondo</label>
                <input type="color" class="form-control" name="background">
            </div>
            <div class="mb-3 w-50">
                <label for="letter" class="form-label">Color de texto</label>
                <select class="form-select" name="letter">
                    <option value="Times new Romans" selected>Times new Romans</option>
                    <option value="Arial">Arial</option>
                    <option value="Calibri">Calibri</option>
                </select>
            </div>
            <div class="mb-3 w-50">
                <label for="letter_color" class="form-label">Color de texto</label>
                <input type="color" class="form-control" name="letter_color">
            </div>
            <div class="mb-3 w-50">
                <label for="languaje" class="form-label">Color de texto</label>
                <select class="form-select" name="languaje">
                    <option value="español" selected>Español</option>
                    <option value="ingles">Inglés</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Enviar" class="btn btn-primary">
        </form>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>