<?php
    function install(){
        try{
            $connection = new PDO("mysql:host=localhost", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            $sql = file_get_contents("./data/db.sql");
            $connection->exec($sql);

        } catch (PDOException $error){
            echo $error->getMessage();
        }
    }

    function connect(){
        try {
            $dsn = "mysql:host=localhost;dbname=canarias";
            $connection = new PDO($dsn, "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $connection;
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    function getIslas(){
        try {
            $connection = connect();
    
            $consultaSQL = "SELECT * FROM isla";
            $sentence = $connection->prepare($consultaSQL);
            $sentence->execute();
    
            $islas = $sentence->fetchAll();
            return $islas;
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    function getMunicipios($idIsla=""){
        try {
            $connection = connect();

    
            if ($idIsla !== ""){
                $consultaSQL = "SELECT * FROM municipio WHERE idIsla = $idIsla";

            } else {
                $consultaSQL = "SELECT * FROM municipio";
            }

            $sentence = $connection->prepare($consultaSQL);
            $sentence->execute();
    
            $municipios = $sentence->fetchAll();
            return $municipios;
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    // install();

?>