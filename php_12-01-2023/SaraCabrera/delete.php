<?php
    if(isset($_REQUEST["id"])){

        include "functions.php";

        $id = $_REQUEST["id"];
        $error = false;
        $config = include "config.php";
        $db = $config["db"];

        try {
            $dsn = "mysql:host=" . $db["host"] . ";dbname=" . $db["name"];
            $conexion = new PDO($dsn, $db["user"], $db["pass"], $db["options"]);

            $consultaSQL = "DELETE FROM students WHERE id = $id";
            $sentencia = $conexion->prepare($consultaSQL);
            $sentencia->execute();

        } catch(PDOException $error) {
            $error = $error->getMessage();
        }

        header("Location: ./index.php");

    } else {
        header("Location: ./showusers.php");
    }
?>