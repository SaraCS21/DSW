<?php

    $cadena_enteros = readline("Diga una cadena de valores enteros separados por comas: ");
    $array_enteros = explode(",", $cadena_enteros);
    $cadena_nueva = "";
    $i = 0;

    while ($i <= count($array_enteros)){
        $salto = $array_enteros[$i];
        $cadena_nueva .= $array_enteros[$i] . "," . str_repeat("_,", $salto);

        if ($array_enteros[$i] == 0){
            break;
        };

        $i += $salto + 1;
    };

    echo $cadena_nueva
?>