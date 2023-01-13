<?php
    if(isset($_POST["submit"])){
        $resultado = [
            "error" => false,
            "mensaje" => "El alumno " . $_POST["nombre"] . "ha sido editado con éxito"
        ];

        $config = include "config.php";
        $db = $config["db"];

        try {
            $dsn = "mysql:host=" . $db["host"] . ";dbname=" . $db["name"];
            $conexion = new PDO($dsn, $db["user"], $db["pass"], $db["options"]);
            
            $id = $_POST["id"];
            $name = $_POST['nombre'];
            $surname = $_POST['apellido'];
            $email = $_POST['email'];
            $age = $_POST['edad'];

            $consultaSQL = <<<TXT
                UPDATE students
                SET name = '$name',
                surname = '$surname',
                email = '$email',
                age = '$age'
                WHERE id = $id;
            TXT;

            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();

            header("Location: showusers.php");

        } catch(PDOException $error) {
            $resultado["error"] = true;
            $resultado["mensaje"] = $error->getMessage();
        }
        
    } else if(isset($_REQUEST["id"])){

        include "functions.php";

        $id = $_REQUEST["id"];
        $error = false;
        $config = include "config.php";
        $db = $config["db"];

        try {
            $dsn = "mysql:host=" . $db["host"] . ";dbname=" . $db["name"];
            $conexion = new PDO($dsn, $db["user"], $db["pass"], $db["options"]);

            $consultaSQL = "SELECT * FROM students WHERE id = $id";
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
            <h2 class="mt-4">Edita al alumno</h2>
            <hr>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <?php
                    if ($alumnos && $sentencia->rowCount()>0) {
                        foreach ($alumnos as $fila) {
                    }
                ?>

                <input type="hidden" name="id" value="<?= codificarHTML($fila["id"]) ?>">

                <div class="form-group mt-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?= codificarHTML($fila["name"]) ?>">
                </div>

                <div class="form-group mt-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?= codificarHTML($fila["surname"]) ?>">
                </div>

                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= codificarHTML($fila["email"]) ?>">
                </div>

                <div class="form-group mt-3">
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad" class="form-control" value="<?= codificarHTML($fila["age"]) ?>">
                </div>

                <?php } ?>

                <div class="form-group mt-3">
                    <input type="submit" name="submit" class="btn btn-success" value="Actualizar">
                    <a class="btn btn-primary" href="showusers.php">Volver atrás</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    } else {
        header("Location: ./showusers.php");
    }

    include "parts/footer.php" 
?>