<?php

    function mostrar($matriz){
        $resultado = "";

        for ($i = 0; $i < count($matriz); $i++){
            $resultado .= "[ " . implode(" ", $matriz[$i]) . " ]\n";
        };
        return $resultado;
    }

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
            for ($columna = 0; $columna < count($matriz1[0]); $columna++){
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
    }

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
            $continuar = readline("¿Desea continuar? S/n: ");
        }
    }

    function operaciones(){
        $matriz1 = crear_matriz();
        $matriz2 = crear_matriz();

        $opcion = readline("Seleccione una de las siguientes opciones:\n1.- Suma\n2.- Resta\n3.- Producto");
    
        switch ($opcion){
            case "1":
                echo suma($matriz1, $matriz2);
            case "2";   
                echo resta($matriz1, $matriz2);
            case "3";
                echo producto($matriz1, $matriz2);
            default:
                echo "Valor no válido";
        };
    };

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

    operaciones();

?>