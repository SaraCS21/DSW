<?php

    // $array_numeros = [1, 2, 3, 4, 0];    // 4
    $array_numeros = [16, 17, 4, 3, 5, 2];  // 17, 5, 2
    $lideres = [];

    for($i=0; $i<=count($array_numeros)-1; $i++){

        $num = $array_numeros[$i];
        $subarray = array_slice($array_numeros, $i + 1);
        $suma = array_sum($subarray);

        if ($num > $suma){
            array_push($lideres, $num);
        };
    };

    $resultado = "[" . implode(", ", $lideres) . "]";
    echo $resultado;
?>