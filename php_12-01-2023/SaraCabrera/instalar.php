<?php
    $config = include "config.php";
    $db = $config["db"];

    try{
        $conexion = new PDO("mysql:host=" . $db["host"], $db["user"], $db["pass"], $db["options"]);

        $sql = file_get_contents("data/bbdd.sql");
        $conexion->exec($sql);

        echo "La base de datos y la tabla alumnado se han creado con éxito";
    } catch (PDOException $error){
        echo $error->getMessage();
    }
?>