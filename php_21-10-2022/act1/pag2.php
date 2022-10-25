<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Actividad 1</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center mt-5 w-100">

    <!-- Hacemos uso de strip_tags() para que, si me intentan pasar una etiqueta
        HTML, indicar que eso no lo queremos y nos lo elimine. -->

    <!-- Hacemos uso de trim() para que, en caso de que me pasen caracteres en blanco,
        indicar que eso no lo queremos y nos lo elimine. -->

    <!-- Hacemos uso de str_replace() para que, en caso de que me pasen un &,
        indicar que eso no lo queremos y nos lo cambie por un and. -->

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
    
            $keys = array_keys($datos);
            for ($i=0; $i < count($keys); $i++) { 
                echo "<td>" . str_replace("&", "and", trim(strip_tags($keys[$i]))) . "</td>";
            }
    
            echo "</tr><tr>";
    
            for ($j=0; $j < count($datos); $j++) { 
                $variable = $keys[$j];
                echo "<td>" . str_replace("&", "and", trim(strip_tags($datos[$variable]))) . "</td>";
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