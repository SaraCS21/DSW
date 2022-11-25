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

        unset($_REQUEST["submit_insert"]);
        $keys_insert = ["dni", "name", "surname", "phone", "birth_date", "email", "insert_date", "block"];

        for ($k = 0; $k < count($keys_insert); $k++){
            $key_insert = $keys_insert[$k];

            if (!isset($_REQUEST["$key_insert"]) || count(array_diff(array_keys($_REQUEST), $keys_insert)) !== 0 || empty($_REQUEST["$key_insert"])){
                return false;

            } else {
                if (!validate_dni($_REQUEST["dni"]) || !validate_phone($_REQUEST["phone"]) || !validate_birth_date($_REQUEST["birth_date"]) || !validate_email($_REQUEST["email"])){
                    return false;

                } else {
                    return true;
                }
            }
        }
    }

    function insert_date(){
        date_default_timezone_set("Atlantic/Canary");
        $now = new DateTime();

        return date_timestamp_get($now);
    }

    function format_date($date){
        // Definimos antes el AM o PM, porque con el "setLocale" da fallo
        $final_value = strftime("%p", $date);
        setLocale(LC_ALL, "es", "ES", "es_ES.UTF-8");

        // utf8_encode -> para evitar problemas con los carácteres especiales
        $time = utf8_encode(strftime("%A, %d de %B de %Y, %H:%M ", $date));

        // ucfirst -> para poner el primer caracter en mayúscula
        return ucfirst($time . $final_value);
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
                    "insert_date" => insert_date(),
                    "block" => false
                ]; 

                $contacts[trim(strip_tags($_REQUEST["dni"]))] = $contact_value;
                $_SESSION["contacts"] = $contacts;
                return true;

            } else {
                return false;
            }
        } 
    }

    function validate_files(){
        if (is_uploaded_file($_FILES["file"]["tmp_name"])){
            if ($_FILES['file']['type'] === "application/pdf" || $_FILES['file']['type'] === "application/odt"){
                $name = $_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"], "./files/$name");
            }
        }
    }

    function block($url, $dni){
        $contacts = $_SESSION["contacts"];
        $contacts[$dni]["block"] = true;
        $_SESSION["contacts"] = $contacts;
    }

    function return_contacts(){
        $contacts = $_SESSION["contacts"];

        if (!validate($contacts)){
            createTitle("Hay datos incorrectos");
        }
    }

    function almacenar_fichero($url, $dni){
        $contacts = $_SESSION["contacts"];
        validate_files();

        $contacts[$dni]["file"] = $_FILES["file"]["name"];
        return_contacts($contacts);
    }

    function modifiy_values($url){
        $contacts = $_SESSION["contacts"];
        $contact_value = [
            "name" => trim(strip_tags($_REQUEST["update_name"])),
            "surname" => trim(strip_tags($_REQUEST["update_surname"])),
            "phone" => trim(strip_tags($_REQUEST["update_phone"])),
            "birth_date" => trim(strip_tags($_REQUEST["update_birth_date"])),
            "email" => trim(strip_tags($_REQUEST["update_email"])),
            "insert_date" => insert_date(),
            "block" => false
        ]; 

        $contacts[trim(strip_tags($_REQUEST["update_dni"]))] = $contact_value;
        $_SESSION["contacts"] = $contacts;
    }

?>