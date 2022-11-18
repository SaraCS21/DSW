<?php 
    session_start();
    $_SESSION["nombre"] = "Sara";
    $_SESSION["valor"] = 22;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php echo "<p>Pulsa <a href='./pag2.php'>aquí</a></<p>" ?>
    </body>
</html>