<?php 

    function jugada($tablero, $mov){
        $jugador1 = "X";
        $jugador2 = "O";
        $fila = readline("Diga la fila: ") - 1;
        $columna = readline("Diga la columna: ") - 1;

        if ($tablero[$fila][$columna] === "-"){
            if ($mov % 2 === 0){
                $tablero[$fila][$columna] = $jugador1;
            } else {
                $tablero[$fila][$columna] = $jugador2;
            };
            $mov++;
        } else {
            echo "Posición no válida \n";
        };
        return [$tablero, $mov];
    };

    function modificar_tablero($tablero, $resultado){
        for ($i = 0; $i < 3; $i++){
            $resultado .= implode(" ", $tablero[$i]) . "\n";
        };
        return $resultado;
    };

    function comprobar_ganador($tablero){
        $ganador = false;
        $gana_jugador = 0;

        for ($pos_fila = 0; $pos_fila < 3; $pos_fila++){
            // Comprobación horizontal
            if (count(array_keys($tablero[$pos_fila], "X")) === 3){
                $gana_jugador = 1;
                $ganador = true;
                break;
            } else if (count(array_keys($tablero[$pos_fila], "O")) === 3){
                $gana_jugador = 2;
                $ganador = true;
                break;
            };

            for ($pos_columna = 0; $pos_columna < 3; $pos_columna++){
                
                // Comprobación vertical
                if (($tablero[0][$pos_columna] == "X") && ($tablero[1][$pos_columna] == "X") && ($tablero[2][$pos_columna] == "X")){
                    $gana_jugador = 1;
                    $ganador = true;
                    break;
                } else if (($tablero[0][$pos_columna] == "O") && ($tablero[1][$pos_columna] == "O") && ($tablero[2][$pos_columna] == "O")){
                    $gana_jugador = 2;
                    $ganador = true;
                    break;
                };
            };
        };

        // Comprobación diagonales
        if (($tablero[1][1] === "X") && (($tablero[0][0] === "X") && ($tablero[2][2] === "X")) || (($tablero[0][2] === "X") && ($tablero[2][0] === "X"))){
            $gana_jugador = 1;
            $ganador = true;
        } else if (($tablero[1][1] === "O") && (($tablero[0][0] === "O") && ($tablero[2][2] === "O")) || (($tablero[0][2] === "O") && ($tablero[2][0] === "O"))){
            $gana_jugador = 2;
            $ganador = true;
        }

        return [$ganador, $gana_jugador];
    };

    function tres_en_raya(){
        $tablero = [
            ["-","-","-"],
            ["-","-","-"],
            ["-","-","-"]
        ];
        $mov = 0;

        while($mov < 9){
            $resultado = "";

            $jugada = jugada($tablero, $mov);
            $tablero = $jugada[0];
            $mov = $jugada[1];

            $resultado = modificar_tablero($tablero, $resultado);

            $ganador = comprobar_ganador($tablero)[0];
            $gana_jugador = comprobar_ganador($tablero)[1];

            if ($ganador){
                $mov = 9;
            };

            echo $resultado;
        };

        if ($gana_jugador === 1){
            echo "Ha ganado el jugador 1 (X)";
        } else if ($gana_jugador === 2){
            echo "Ha ganado el jugador 2 (O)";
        } else {
            echo "Ha habido un empate";
        };
    };

    tres_en_raya();

?>