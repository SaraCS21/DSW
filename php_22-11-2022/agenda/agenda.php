<?php 
    session_start();

    if (!isset($_SESSION["contacts"])){
        $_SESSION["contacts"] = []; 
    }    

    require "./parts/header.php";
    require "./parts/footer.php";
    require "./parts/title.php";
    require "./parts/options.php";
    require "./functions/functions.php";

    createHeader("Agenda", $_SERVER['PHP_SELF'])
?>

<?php
    $keys = ["insert", "update", "show"];
    $url = $_SERVER['PHP_SELF']; 

    if (isset($_REQUEST["submit_insert"])){
        return_contacts();

    } else if (isset($_REQUEST["organize"])) {
        show($url, $_REQUEST["select"]);

    } else if (isset($_REQUEST["block"])) {
        block($url, $_REQUEST["dni_active"]);

    } else if (isset($_REQUEST["upload"])) {
        upload($url, $_REQUEST["dni_active"]);

    } else if (isset($_FILES["file"])) {
        almacenar_fichero($url, $_REQUEST["dni_active"]);

    } else if (isset($_REQUEST["update"])) {
        update($url, $_REQUEST["dni_active"]);

    } else if (isset($_REQUEST["update_insert"])) {
        modifiy_values($url);

    } else {
        for ($k = 0; $k < count($keys); $k++){
            $key = $keys[$k];
    
            if (isset($_REQUEST["$key"])){
                switch($key) {
                    case "insert": 
                        insert($url);
                        break;
                    case "show":
                        show($url);
                        break;
                    default:
                        break;
                }
            }
        }
    }
?>

<?= createFooter() ?>