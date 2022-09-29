<?php

    $array = array();
    $resultado = "";

    while (count($array) != 5){
        $num = rand(20, 30);
        array_push($array, $num);
    };

    $resultado = "[" . implode(", ", $array) . "]";
    echo $resultado;
    
?>