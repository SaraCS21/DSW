<?php 
    require "./parts/header.php";
    require "./parts/footer.php";
    require "./parts/title.php";
    require "./parts/options.php";
    require "./functions/functions.php";
?>

<?php
    $contacts = isset($_REQUEST["contacts"]) ? json_decode($_REQUEST["contacts"], true) : [];
?>

<?= createHeader("Agenda", $_SERVER['PHP_SELF'], $contacts) ?>

<?php
    $keys = ["insert", "update", "show", "contacts"];
    $url = $_SERVER['PHP_SELF']; 

    if (isset($_REQUEST["dni"])){
        return_contacts($contacts);

    } else if (isset($_REQUEST["organize"])) {
        show($url, $contacts, $_REQUEST["select"]);

    } else if (isset($_REQUEST["block"])) {
        block($url, $contacts, $_REQUEST["dni_active"]);

    } else if (isset($_REQUEST["upload"])) {
        upload($url, $contacts, $_REQUEST["dni_active"]);

    } else if (isset($_FILES["file"])) {
        almacenar_fichero($url, $contacts, $_REQUEST["dni_active"]);

    } else if (isset($_REQUEST["update"])) {
        update($url, $contacts, $_REQUEST["dni_active"]);

    } else if (isset($_REQUEST["update_insert"])) {
        modifiy_values($url, $contacts);

    } else {
        for ($k = 0; $k < count($keys); $k++){
            $key = $keys[$k];
    
            if (isset($_REQUEST["$key"])){
                switch($key) {
                    case "insert": 
                        insert($url, $contacts);
                        break;
                    case "show":
                        show($url, $contacts);
                        break;
                    default:
                        break;
                }
            }
        }
    }
?>

<?= createFooter() ?>