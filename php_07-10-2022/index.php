<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sara del Pino Cabrera Sánchez</title>
</head>
<body>
    <h1>Sara del Pino Cabrera Sánchez</h1>
    <?php
        echo "<p>El SHA256 de 'Sara Cabrera' es: </p><p>" . hash("SHA256", "Sara Cabrera") . "</p>"
    ?>
    <p>Arte ASCII: </p>
    <pre>
         **********
        ***********
        ***
        ***
        **********
         **********
                ***
                ***
        ***********
        **********
    </pre>
    <p><a href="check.php">Clica aquí para comprobar la configuración de los errores</a></p>
    <p><a href="fail.php">Clica aquí para realizar un rastreo</a></p>
</body>
</html>