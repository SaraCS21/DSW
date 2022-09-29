<?php

    $array = [];

    for($i=0; $i<=100; $i+=2){
        array_push($array, $i);
    };

    $resultado = "[" . implode(", ", $array) . "]";
    echo $resultado;
?>