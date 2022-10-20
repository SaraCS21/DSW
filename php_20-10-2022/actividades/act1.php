<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Actividad 1</title>
</head>
<body>
    <h1 class='mb-3 mt-5 text-center'>Generación de Tablas</h1>
    <form method="post" action="function.php" class="d-flex flex-column justify-content-center align-items-center mt-5 w-100">
        <label for="column" class="form-label">Escriba el número de columnas</label>
        <input type="number" name="column" class="form-control w-25">
        <br><br>
        <label for="row" class="form-label">Escriba el número de filas</label>
        <input type="number" name="row" class="form-control w-25">
        <br><br>
        <input type="submit" value="Enviar" class="btn btn-outline-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>