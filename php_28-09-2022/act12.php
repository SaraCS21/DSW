<?php

    $cadena_enteros = readline("Diga una cadena de valores enteros separados por comas: ");
    $array_enteros = explode(",", $cadena_enteros);
    $cadena_nueva = "";

    for ($i=0; $i<=count($array_enteros)-1; $i++){

        $salto = $array_enteros[$i];
        $cadena_nueva .= $array_enteros[$i] . "," . str_repeat("_,", $salto);

        $i += $salto;

        if ($salto == 0){
            break;
        };
    };

    echo $cadena_nueva;

?>