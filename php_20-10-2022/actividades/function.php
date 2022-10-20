<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Actividad 1</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center mt-5 w-100">
    <?php
        $column = $_POST["column"];
        $row = $_POST["row"];

        if ($column <= 0 || $row <= 0){
            echo "<h1>Valor inválido</h1>";

        } else {
            echo "<h1 class='mb-4'>Tabla $row x $column</h1>";
            echo "<table class='table table-primary w-50 text-center table-bordered'>";
            for($i = 0; $i < $row; $i++){
                echo "<tr>";
                for($j = 0; $j < $column; $j++){
                    echo "<td>$i - $j</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>