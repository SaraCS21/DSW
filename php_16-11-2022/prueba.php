<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Warning</title>
    </head>
    <body>
        <?php
            setcookie("nombre", "Sara");
            echo $_COOKIE["nombre"];
        ?>
    </body>
</html>