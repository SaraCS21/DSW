<?php
    session_start();
    $tasks = isset($_SESSION["tasks"]) ? $_SESSION["tasks"] : []; 

    if (isset($_REQUEST["submit"])){
        array_push($tasks, $_REQUEST["task"]);

        $_SESSION["tasks"] = $tasks;
        Header("Location: lista.php");
    } 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <title>Lista de tareas</title>
    </head>
    <body>

        <form method="post" class="w-100 mt-5 d-flex flex-column justify-content-center align-items-center">
            <div class="mb-3 w-50">
                <input type="text" class="form-control" name="task">
            </div>
            <input type="submit" name="submit" value="Añadir tarea" class="btn btn-primary">
        </form>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>