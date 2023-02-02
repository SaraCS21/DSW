<?php

    function install(){
        try{
            $connection = new PDO("mysql:host=localhost", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            $sql = file_get_contents("./db.sql");
            $connection->exec($sql);

        } catch (PDOException $error){
            echo $error->getMessage();
        }
    }

    function select(){
        try {
            $dsn = "mysql:host=localhost;dbname=canarias";
            $connection = new PDO($dsn, "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    
            $consultaSQL = "SELECT * FROM customer";
            $sentence = $connection->prepare($consultaSQL);
            $sentence->execute();
    
            $customers = $sentence->fetchAll();
            return $customers;
    
        } catch(PDOException $error) {
            $error = $error->getMessage();
        }
    }

    install();
    $customers = select();

    foreach ($customers as $customer) {
        echo "$customer[1] $customer[2] $customer[3]<br>";
    }

?>