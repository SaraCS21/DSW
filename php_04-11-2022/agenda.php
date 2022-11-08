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
    $keys = ["insert", "update", "block", "show", "upload", "contacts"];
    $url = $_SERVER['PHP_SELF']; 

    $contacts = $_REQUEST["contacts"];
    print_r($contacts);

    if (isset($_REQUEST["dni"])){
        print("hola");
        return_contacts($_REQUEST, $json_contacts);

    } else {
        for ($k = 0; $k < count($keys); $k++){
            $key = $keys[$k];
    
            if (isset($_REQUEST["$key"])){
                switch($key) {
                    case "insert": 
                        insert($url, $contacts);
                        break;
                    case "update":
                        update($url);
                        break;
                    case "block":
                        block($url);
                        break;
                    case "show":
                        show($url);
                        break;
                    case "upload":
                        upload($url);
                        break;
                    default:
                        break;
                }
            }
        }
    }

?>

<?= createFooter() ?>