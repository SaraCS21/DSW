<?php
    require "./main.php";

    $idIsla = $_REQUEST["idIsla"];

    foreach (getMunicipios($idIsla) as $municipio) { 
        echo "<option value='$municipio[2]'>$municipio[1]</option>";
    }  

?>