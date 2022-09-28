<?php
    // Declaración de Variables
    $numero = 3;
    $decimal = 4.2;
    $string_comillas_simples = 'Hola Mundo';
    $string_comillas_dobles = "Adiós Mundo";
    $array = array(1, 2, 3);
    $boolean = true;
    $diccionario = array(
        "indice1" => "valor1",
        "indice2" => "valor2",
        "indice3" => "valor3"
    );

    // Concatenar cadenas
    $cadenas_concatenadas = $string_comillas_dobles . ", " . $string_comillas_simples;
    
    // Pasar las cadens por pantalla
    print $string_comillas_dobles . "\n";
    echo $string_comillas_simples . "\n";

    // Creación de variables
    define("var1", 4);
    const var2 = 5.2;

    // Obtener el tipo y valor de la variable
    var_dump(var1);

    // Cambiamos el tipo de una variable
    $var3 = (int)(var2 * var1);
    var_dump($var3);

    // Hacemos uso de las referencias
    $nombre = "Sara";
    $ref = &$nombre;
    echo $nombre . "\n";
    $ref = "Juan";
    echo $nombre;

?>