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
        $num = $_POST["num"];
        $result = 0;
        $message = "";

        if ($num === ""){
            echo "<h1 class='mb-4'>No has insertado ningún valor.</h1>";
        } else {
            for ($i = 2; $i < intval($num); $i += 2){
                $result += $i;
                $message .= "$i + ";
            }
            $message = substr($message, 0, -3);
    
            echo "<h1 class='mb-4'>La suma es:</h1>";
            echo "<h2 class='mb-4'>$message = $result</h2>";
        }
    ?>
    <form method="post" action="pag1.php" class="d-flex flex-column justify-content-center align-items-center mt-5 w-100">
        <input type="submit" value="¿Desea insertar otro número?" class="btn btn-outline-primary"> 
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>