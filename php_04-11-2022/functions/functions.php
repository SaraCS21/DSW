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

    function comprobe_insert($keys){
        $stop = false;

        unset($_REQUEST["submit_insert"]);
        $keys_insert = ["dni", "name", "surname", "phone", "birth_date", "email", "insert_date", "contacts"];

        for ($k = 0; $k < count($keys_insert); $k++){
            $key_insert = $keys_insert[$k];

            // || empty($_REQUEST["$key_insert"])
            if (!isset($_REQUEST["$key_insert"]) || count(array_diff(array_keys($_REQUEST), $keys_insert)) !== 0){
                echo "<p>Datos incorrectos</p>";
                $stop = true;
            }
        }

        if (!$stop){

            if (!validate_dni($_REQUEST["dni"]) || !validate_phone($_REQUEST["phone"]) || !validate_birth_date($_REQUEST["birth_date"]) || !validate_email($_REQUEST["email"])){
                echo "<p>Datos incorrectos</p>";

            } else {
                return true;
            }
        } 
        
        return false;
    }

    function insert_date(){

        date_default_timezone_set("Atlantic/Canary");
        $now = new DateTime();

        // Definimos antes el AM o PM, porque con el "setLocale" da fallo
        $final_value = strftime("%p", date_timestamp_get($now));
        setLocale(LC_ALL, "es", "ES", "es_ES.UTF-8");
    
        // utf8_encode -> para evitar problemas con los carácteres especiales
        $time = utf8_encode(strftime("%A, %d de %B de %Y, %H:%M ", date_timestamp_get($now)));
    
        // Preguntas a Mariola
        return "hola";
        //return $time . $final_value;
    }

    function validate(&$contacts){
        $keys = array_keys($_REQUEST);
        
        if (in_array("submit_insert", $keys)){
            if (comprobe_insert($keys)) {

                $contact_value = [
                    "name" => trim(strip_tags($_REQUEST["name"])),
                    "surname" => trim(strip_tags($_REQUEST["surname"])),
                    "phone" => trim(strip_tags($_REQUEST["phone"])),
                    "birth_date" => trim(strip_tags($_REQUEST["birth_date"])),
                    "email" => trim(strip_tags($_REQUEST["email"])),
                    "insert_date" => insert_date()
                ]; 

                $contacts[trim(strip_tags($_REQUEST["dni"]))] = $contact_value;

                print_r($contacts);

            } else {

                echo "<p>Datos incorrectos</p>";
            }

        } else if (in_array("submit_update", $keys)){

        } else if (in_array("submit_block", $keys)){
            
        } else if (in_array("submit_show", $keys)){
            
        } else if (in_array("submit_upload", $keys)){
            
        }
    }

    // function test($agenda){
    //     echo '<pre>';
    //     print_r($agenda);
    //     echo '</pre>';
    // }

    function return_contacts($contacts){
        validate($contacts);

        //test($contacts);
        $contacts = json_encode($contacts);

        header("Location:http://localhost:3000/php_04-11-2022/agenda.php?contacts=" . $contacts );
    }

?>