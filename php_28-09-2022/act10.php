<?php

    $cadena_original = readline("Diga una cadena de elementos separados por comas: ");
    $array_cadena = explode(",", $cadena_original);
    $cadena_nueva = implode(",", array_unique($array_cadena));

    echo "Cadena original: " . $cadena_original . "\n";
    echo "Nueva cadena: " . $cadena_nueva;

?>