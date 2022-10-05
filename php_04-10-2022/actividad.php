<?php
    // $jugador1 = "X";
    // $jugador2 = "O";
    // $tablero = [
    //     ["-","-","-"],
    //     ["-","-","-"],
    //     ["-","-","-"]
    // ];
    // $mov = 0;


    // while($mov < 9){
    //     $resultado = "";
        // $fila = readline("Diga la fila: ") - 1;
        // $columna = readline("Diga la columna: ") - 1;

        // if ($tablero[$fila][$columna] === "-"){
        //     if ($mov % 2 === 0){
        //         $tablero[$fila][$columna] = $jugador1;
        //     } else {
        //         $tablero[$fila][$columna] = $jugador2;
        //     };
        //     $mov++;
        // } else {
        //     echo "Posición no válida \n";
        // };

        // for ($i = 0; $i < 3; $i++){
        //     $resultado .= implode(" ", $tablero[$i]) . "\n";
        // }

        for ($pos_fila = 0; $pos_fila < 3; $pos_fila++){
            
            if (count(array_keys($tablero[$pos_fila], "X")) === 3){
                $ganador = 1;
                $mov = 9;
                break;
            } else if (count(array_keys($tablero[$pos_fila], "O")) === 3){
                $ganador = 2;
                $mov = 9;
                break;
            };

            for ($pos_columna = 0; $pos_columna < 3; $pos_columna++){
                if (array_keys($tablero[$pos_fila][$pos_columna], "X") === 3){
                    $ganador = 1;
                    $mov = 9;
                    break;
                } else if (array_keys($tablero[$pos_fila][$pos_columna], "O") === 3){
                    $ganador = 2;
                    $mov = 9;
                    break;
                };
            };
        };

        echo $resultado;
    };
?>