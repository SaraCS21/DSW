<?php

    // Llamamos al fichero donde almacenamos los datos
    require "parameters.php";
    echo "<h3>Actividad 1</h3>";
    echo "<p>En el fichero parameters.php</p>";

    // Act 2
    echo "<h3>Actividad 2</h3>";
    function show_values($values){
        
        // Recorremos los valores y los mostramos
        foreach ($values as $key => $value) {
            echo "<p>Alumno/a: $key</p>";

            foreach ($value as $name => $calification) {
                echo "<p>$name: $calification</p>";
            }
        }
    }

    show_values($values);

    // Act 3
    echo "<h3>Actividad 3</h3>";
    function media($values){

        // Número de alumnos
        $num = count($values); 

        // Array donde almacenaremos la suma de sus notas
        $notas = [
            "DSW" => 0,
            "DPL" => 0,
            "DOR" => 0
        ];     

        // Array donde almacenaremos la media de las notas
        $nota_media = [];

        // Sumamos los valores y los almacenamos
        foreach ($values as $value) {
            $notas["DSW"] += $value["DSW"];
            $notas["DPL"] += $value["DPL"];
            $notas["DOR"] += $value["DOR"];
        }

        // Los insertamos en el array de la media y los redondeamos
        array_push($nota_media, number_format($notas["DSW"]/$num, 2), number_format($notas["DPL"]/$num, 2), number_format($notas["DOR"]/$num, 2));
        
        // Mostramos el resultado final
        PRINT <<<END
            <p>Media DSW: $nota_media[0]</p>
            <p>Media DPL: $nota_media[1]</p>
            <p>Media DOR: $nota_media[2]</p>
        END;

    }

    media($values);

    // Act 4

    // Validamos los datos del formulario
    function validate(){
        $values = ["name", "phone", "submit"];
        $continue = true;

        // Comprobamos que la cantidad de elementos pasados no sea diferente a 
        // lo que debemos tener
        if (count($_REQUEST) !== count($values)){
            $continue = false;

        } else {
            foreach ($values as $a) {
                // Comprobamos que la clave existe y que, además, tenga contenido
                if (!isset($a) || $_REQUEST[$a] === ""){
                    $continue = false;
                }
            }
        }

        if($continue){
            return true;
        }
    }

?>