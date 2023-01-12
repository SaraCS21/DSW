<?php

    // Cuenta la cantidad de valores en un array
    function num_values(){
        return count($_SESSION["values"]);
    }

    // Cuenta la cantidad de números pares en un array
    function num_par(){
        $cont = 0;
        foreach ($_SESSION["values"] as $value) {
            if ($value % 2 === 0){
                $cont++;
            }
        }
        return $cont;
    }

    // Devuelve el número par más grande
    function num_par_bigger(){
        $bigger = 0;
        foreach ($_SESSION["values"] as $value) {
            if ($value % 2 === 0 && $value > $bigger){
                $bigger = $value;
            }
        }
        return $bigger;
    }

    // Devuelve la suma de todos los números pares
    function num_par_sum(){
        $sum = 0;
        foreach ($_SESSION["values"] as $value) {
            if ($value % 2 === 0){
                $sum += $value;
            }
        }
        return $sum;
    }

    // Devuelve la suma de todos los números impares
    function num_impar_sum(){
        $sum = 0;
        foreach ($_SESSION["values"] as $value) {
            if ($value % 2 !== 0){
                $sum += $value;
            }
        }
        return $sum;
    }

    // Devuelve la media de todos los números pares
    function num_par_media(){
        $sum = 0;
        $cont = 0;
        foreach ($_SESSION["values"] as $value) {
            if ($value % 2 === 0){
                $cont++;
                $sum += $value;
            }
        }

        if ($cont !== 0){
            $result = round($sum/$cont, 2);
        } else {
            $result = "-";
        }
        
        return $result;
    }
    
    // Devuelve la media de todos los números impares
    function num_impar_media(){
        $sum = 0;
        $cont = 0;
        foreach ($_SESSION["values"] as $value) {
            if ($value % 2 !== 0){
                $cont++;
                $sum += $value;
            }
        }

        if ($cont !== 0){
            $result = round($sum/$cont, 2);
        } else {
            $result = "-";
        }

        return $result;
    }

?>