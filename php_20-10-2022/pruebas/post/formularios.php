<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms POST</title>
</head>
<body>

    <form method="post" action="page1.php">
        <input type="text" name="name">
        <label for="name">Write your name</label>
        <br><br>
        <input type="text" name="surname">
        <label for="surname">Write your surname</label>
        <br><br>
        <input type="text" name="address">
        <label for="address">Write you address</label>
        <br><br>
        <input type="text" name="phone" maxlength="9" pattern="[0-9]{9}">
        <label for="phone">Write your phone</label>
        <br><br>
        <input type="submit" value="SEND">
        <br><br>
    </form>

</body>
</html>
