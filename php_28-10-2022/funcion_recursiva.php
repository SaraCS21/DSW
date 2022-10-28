// Una funcion recursiva SIEMPRE puede ser iterativa
// Una función iterativa NO siempre puede ser recursiva

<?php
    function factorial($n){
        if ($n === 1){
            return 1;
        } else {
            return $n * factorial($n-1);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Funcion Recursiva</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
    <?php
        $num = mt_rand(1, 10);
        echo "<p> El factorial de ${num} es: " . factorial($num) . "</p>";
    ?>

    </body>
</html>