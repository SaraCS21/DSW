<?php 
    require "./parts/header.php";
    require "./parts/footer.php";
    require "./parts/title.php";
    require "./parts/options.php";
    require "./functions/functions.php";
?>

<?php
    $contacts = isset($_POST["contacts"]) ? json_decode($_POST["contacts"], true) : [];
?>

<?= createHeader("Agenda", $_SERVER['PHP_SELF'], $contacts) ?>

<?php
    $keys = ["insert", "update", "block", "show", "upload"];
    $url = $_SERVER['PHP_SELF']; 

    for ($k = 0; $k < count($keys); $k++){
        $key = $keys[$k];
        if (isset($_POST["$key"])){
            createTitle($_POST["$key"]);

            switch($key) {
                case "insert": 
                    insert($url, $_POST["contacts"]);
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

    validate($_POST, $contacts);
?>

<?= createFooter() ?>