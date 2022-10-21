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

        $claves = ["name1", "name2", "surname", "year", "month", "day", "direction", "dni", "city", "email", "phone", "sexo", "info"];
        $seguir = true;

        for ($c = 0; $c < count($claves); $c++){
            $clave = $claves[$c];
            if (isset($_POST["$clave"])){
                continue;
            } else {
                $seguir = false;
            }
        }

        if ($seguir){
            echo "<table class='table table-striped w-75'>";
            $datos = $_POST;
    
            echo "<tr>";
            // foreach(array_keys($datos) as $clave){
            //     echo "<td>$clave</td>";
            // }
    
            $keys = array_keys($datos);
            for ($i=0; $i < count($keys); $i++) { 
                echo "<td>$keys[$i]</td>";
            }
    
            echo "</tr><tr>";
            // foreach($datos as $valor){
            //     echo "<td>$valor</td>";
            // }
    
            for ($j=0; $j < count($datos); $j++) { 
                $variable = $keys[$j];
                echo "<td>$datos[$variable]</td>";
            }
    
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Hay un error en los parámetros";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>