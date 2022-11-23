<?php
    session_start();
    print_r($_SESSION["tasks"]);
    $url = $_SERVER["PHP_SELF"];

    if ($_SESSION["tasks"] === [] || isset($_REQUEST["return"])){
        Header("Location: formulario.php");
    }

    if (isset($_REQUEST["delete"])){
        $pos = array_search($_REQUEST["delete"], $_SESSION["tasks"]);
        unset($_SESSION["tasks"][$pos]);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <title>Lista de tareas</title>
    </head>
    <body>
        
        <form method="post" action="<?= $url ?>" class="w-100 mt-5 d-flex justify-content-center flex-wrap">
            <ol class="list-group list-group-numbered w-25">
                <?php
                    foreach ($_SESSION["tasks"] as $task) {
                        echo "<li class='list-group-item d-flex align-items-center justify-content-between'>$task <button type='submit' name='delete' value='$task' class='btn btn-danger'><i class='bx bxs-trash'></i></button></li>";
                    }
                ?>
            </ol>

            <div class="w-100 d-flex justify-content-center mt-4">
                <button type='submit' name='return' class='btn btn-primary'>Insertar nueva tarea</button>
            </div>
        </form>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>