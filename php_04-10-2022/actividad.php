<?php
    $jugador1 = "X";
    $jugador2 = "O";
    $resultado = "";
    $tablero = [
        ["-","-","-"],
        ["-","-","-"],
        ["-","-","-"]
    ];

    for ($mov = 0; $mov < 9; $mov++){
        $fila = readline("Diga la fila: ") - 1;
        $columna = readline("Diga la columna: ") - 1;

        if ($tablero[$fila][$columna] == "-"){
            if ($mov % 2 == 0){
                $tablero[$fila][$columna] = $jugador1;
            } else {
                $tablero[$fila][$columna] = $jugador2;
            };
        } else {
            echo "Posición no válida \n";
        };

        for ($i = 0; $i < 3; $i++){
            $resultado = implode(" ", $tablero[$i]) . "\n";
        }

        echo $resultado;
    };
?>