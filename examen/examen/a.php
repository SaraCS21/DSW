<?php

    date_default_timezone_set("Atlantic/Canary");
    $now = new DateTime();
    $date = date_timezone_get($now);

    // Si queremos poner am o pm
    // $ampm = strftime("%p", $date);

    setLocale(LC_ALL, "es", "ES", "es_ES.UTF-8");

    // uft8_encode() -> si da fallos de caracteres especiales
    $final = strftime("__", $date);

    // Sanitizar -> trim() | strip_tags() | str_replace()
    // header("Location:url");
    // $url -> $_SERVER[“PHP_SELF”]

    // <form method="post" action=$url enctype="multipart/form-data">
    // <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    is_uploaded_file($_FILES["nombre_fichero"]["tmp_name"]);
    $_FILES["nombre_fichero"]["type"];
    move_uploaded_file($_FILES["nombre_fichero"]["tmp_name"], $carpeta);

?>