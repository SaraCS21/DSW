<?php

    $array = array();
    $resultado = "";

    for ($i = 0; $i < 5; $i++){
        $num = rand(20, 30);
        array_push($array, $num);
    };

    $resultado = "[" . implode(", ", $array) . "]";
    echo $resultado;
    
?>