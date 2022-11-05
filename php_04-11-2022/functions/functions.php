<?php

    function validate_dni($dni){
        /**
         *  preg_match("/[A-Za-z]$/", $dni) ->
         * 
         * [A-Za-z] -> cualquier caracter de la "a" a la "z". Tanto mayúsculas como minúsculas
         * $ -> para indicar que solo quiero comprobar la condición en el último caracter
         * 
         *  preg_match("/[0-9]{8}/", $dni)
         * 
         * \d -> cualquier valor entre 0 y 9
         * {8} -> cantidad de veces que se tiene que cumplir la condición
         * 
         * strlen($dni) -> longitud de la cadena
         * 
         * */  

        if (preg_match("/[A-Za-z]$/", $dni) === 1 && preg_match("/\d{8}/", $dni) === 1 && strlen($dni) === 9){
            return true;
        } else {
            return false;
        }
    }

    function validate_phone($phone){
        /**
         *  
         *  preg_match("/\d{9}/", $phone)
         * 
         * \d -> cualquier valor entre 0 y 9
         * {9} -> cantidad de veces que se tiene que cumplir la condición
         * 
         * strlen($phone) -> longitud de la cadena
         * 
         * */  

        if (preg_match("/[0-9]{9}/", $phone) === 1 && strlen($phone) === 9){
            return true;
        } else {
            return false;
        }
    }

    function validate_birth_date($birth_date){
        /**
         *  preg_match("/\d{4}[-](0[1-9]|1[012])[-](0[1-9]|[12]\d|3[01])/", $birth_date)
         * 
         * \d{4} -> cualquier valor entre 0 y 9. Un total de 4 caracteres.
         * 
         * [-] -> en esta posición va un guión
         * 
         * (0[1-9]|1[012]) -> hay dos opciones disponibles:
         *      
         *      0[1-9] -> el número empieza por 0 y solo puede ser precedido por un valor del 1 al 9
         *      1[012] -> el número empieza por 1 y solo puede ser precedido por un valor igual a 0, 1 o 2
         * 
         * (0[1-9]|[12]\d|3[01]) -> hay tres opciones disponibles:
         *      
         *      0[1-9] -> el número empieza por 0 y solo puede ser precedido por un valor del 1 al 9
         *      [12]\d -> el número puede empezar por 1 o por 2 y ser precedido por cualquier valor entre 0 y 9
         *      3[01] -> el número empieza por 3 y solo puede ser precedido por un valor igual a 0 o 1 
         */

        if (preg_match("/\d{4}[-](0[1-9]|1[012])[-](0[1-9]|[12]\d|3[01])/", $birth_date) === 1){
            return true;
        } else {
            return false;
        }
    }

    function validate_email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        } else {
            return false;
        }
    }

    function comprobe_insert($insert_values, $keys){
        $stop = false;

        unset($insert_values["submit_insert"]);
        $keys_insert = ["dni", "name", "surname", "phone", "birth_date", "email"];

        for ($k = 0; $k < count($keys_insert); $k++){
            $key_insert = $keys_insert[$k];

            if (!isset($_POST["$key_insert"]) || count(array_diff(array_keys($insert_values), $keys_insert)) !== 0 || empty($_POST["$key_insert"])){
                echo "<p>Datos incorrectos</p>";
                $stop = true;
            }
        }

        if (!$stop){

            if (!validate_dni($insert_values["dni"]) || !validate_phone($insert_values["phone"]) || !validate_birth_date($insert_values["birth_date"]) || !validate_email($insert_values["email"])){
                echo "<p>Datos incorrectos</p>";

            } else {
                return true;
            }
        } 
        
        return false;
    }

    function validate($insert_values){
        $keys = array_keys($insert_values);
        
        if (in_array("submit_insert", $keys)){
            
            if (comprobe_insert($insert_values, $keys)) {
                $contact = array(
                    "dni" => trim(strip_tags($insert_values["dni"])),
                    "name" => trim(strip_tags($insert_values["name"])),
                    "surname" => trim(strip_tags($insert_values["surname"])),
                    "phone" => trim(strip_tags($insert_values["phone"])),
                    "birth_date" => trim(strip_tags($insert_values["birth_date"])),
                    "email" => trim(strip_tags($insert_values["email"]))
                );

                print_r($contact);
            }

        } else if (in_array("submit_update", $keys)){

        } else if (in_array("submit_block", $keys)){
            
        } else if (in_array("submit_show", $keys)){
            
        } else if (in_array("submit_upload", $keys)){
            
        }
    }

?>