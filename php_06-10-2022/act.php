<?php

    function mostrar($matriz){
        $resultado = "";

        for ($i = 0; $i < count($matriz); $i++){
            $resultado .= "[ " . implode(" ", $matriz[$i]) . " ]\n";
        };
        return $resultado;
    };

    function suma($matriz1, $matriz2){
        $resultado_fila = [];
        $resultado = [];

        for ($fila = 0; $fila < count($matriz1); $fila++){
            for ($columna = 0; $columna < count($matriz1[0]); $columna++){
                $suma = $matriz1[$fila][$columna] + $matriz2[$fila][$columna];
                array_push($resultado_fila, $suma);
            };
            array_push($resultado, $resultado_fila);
            $resultado_fila = [];
        };
        echo mostrar($resultado);
    };

    function resta($matriz1, $matriz2){
        $resultado_fila = [];
        $resultado = [];

        for ($fila = 0; $fila < count($matriz1); $fila++){
            for ($columna = 0; $columna < count($matriz1[0]); $columna++){
                $resta = $matriz1[$fila][$columna] - $matriz2[$fila][$columna];
                array_push($resultado_fila, $resta);

            };
            array_push($resultado, $resultado_fila);
            $resultado_fila = [];
        };
        echo mostrar($resultado);
    };

    function producto($matriz1, $matriz2){
        $resultado_fila = [];
        $resultado = [];
        $producto = 0;

        for ($fila = 0; $fila < count($matriz1); $fila++){
            for ($columna = 0; $columna < count($matriz2[0]); $columna++){
                for ($cont = 0; $cont < count($matriz1[0]); $cont++){
                    $producto += $matriz1[$fila][$cont] * $matriz2[$cont][$columna];
                }
                array_push($resultado_fila, $producto);
                $producto = 0;
            };
            array_push($resultado, $resultado_fila);
            $resultado_fila = [];
        };
        echo mostrar($resultado);
    };

    function crear_matriz(){
        $continuar = "S";
        $columna = readline("Diga de cuantas columnas quiere la matriz: ");
        $fila = [];
        $matriz = [];

        while ($continuar === "S"){
            for ($i = 0; $i < $columna; $i++){
                $num = intval(readline("Diga un valor: "));
                array_push($fila, $num);
            }
            array_push($matriz, $fila);
            $fila = [];
            $continuar = readline("¿Desea insertar otra fila? S/n: ");
        }
        return $matriz;
    };

    function operaciones(){
        $matriz1 = crear_matriz();
        $matriz2 = crear_matriz();

        echo mostrar($matriz1) . "\n";
        echo mostrar($matriz2);

        $opcion = readline("Seleccione una de las siguientes opciones:\n1.- Suma\n2.- Resta\n3.- Producto");

        $fila1 = (count($matriz1));
        $columna1 = (count($matriz1[0]));

        $fila2 = (count($matriz2));
        $columna2 = (count($matriz2[0]));
    
        switch ($opcion){
            case "1":
                if (($fila1 === $fila2) && ($columna1 === $columna2)){
                    echo suma($matriz1, $matriz2);
                } else {
                    echo "No se puede realizar la suma de estas matrices.";
                }
                break;
            case "2";   
                if (($fila1 === $fila2) && ($columna1 === $columna2)){
                    echo resta($matriz1, $matriz2);
                } else {
                    echo "No se puede realizar la resta de estas matrices.";
                }
                break;
            case "3";
                if (($columna1 === $fila2)){
                    echo producto($matriz1, $matriz2);
                } else {
                    echo "No se puede realizar el producto de estas matrices.";
                }
                break;
            default:
                echo "Valor no válido";
        };
    };

    /*
    $matriz1 = [
        [2, 0, 1],
        [3, 0, 0],
        [5, 1, 1]
    ];

    $matriz2 = [
        [1, 0, 1],
        [1, 2, 1],
        [1, 1, 0]
    ];

    // Producto
        [3, 1, 2]
        [3, 0, 3]
        [7, 3, 6]
    */

        /*
    $matriz1 = [
        [1, 0, 0],
        [3, 4, 2]
    ];

    $matriz2 = [
        [2, 1],
        [0, 3],
        [1, 0]
    ];

    // Producto
        [2, 1]
        [8, 15]
    */

    operaciones();

?>