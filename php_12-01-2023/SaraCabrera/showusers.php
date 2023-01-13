<?php 
    include "functions.php";

    $error = false;
    $config = include "config.php";
    $db = $config["db"];

    try {
        $dsn = "mysql:host=" . $db["host"] . ";dbname=" . $db["name"];
        $conexion = new PDO($dsn, $db["user"], $db["pass"], $db["options"]);

        $consultaSQL = "SELECT * FROM students";
        $sentencia = $conexion->prepare($consultaSQL);
        $sentencia->execute();

        $alumnos = $sentencia->fetchAll();

    } catch(PDOException $error) {
        $error = $error->getMessage();
    }
?>

<?php include "parts/header.php" ?>

<?php if($error) {?>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-3">Lista de alumnos/as</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Edad</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if ($alumnos && $sentencia->rowCount()>0) {
                            foreach($alumnos as $fila) {
                    ?>

                    <tr>
                        <td><?= codificarHTML($fila["id"]) ?></td>
                        <td><?= codificarHTML($fila["name"]) ?></td>
                        <td><?= codificarHTML($fila["surname"]) ?></td>
                        <td><?= codificarHTML($fila["email"]) ?></td>
                        <td><?= codificarHTML($fila["age"]) ?></td>
                        <td>
                            <a href="./edit.php?id=<?= $fila["id"] ?>" name="actualizar" class="btn btn-warning">Actualizar</a>                            
                        </td>
                        <td>
                            <a href="./delete.php?id=<?= $fila["id"] ?>" name="actualizar" class="btn btn-danger">Eliminar</a>                            
                        </td>
                    </tr>

                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php" class="btn btn-primary mt-4">Regresar al inicio</a>
        </div>
    </div>
</div>

<?php include "parts/footer.php" ?>