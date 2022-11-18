<?php

    date_default_timezone_set("Atlantic/Canary");
    $now = new DateTime();
    $date = date_timezone_get($now);

    // Si queremos poner am o pm
    // $ampm = strftime("%p", $date);

    setLocale(LC_ALL, "es", "ES", "es_ES.UTF-8");

    // uft8_encode() -> si da fallos de caracteres especiales
    $final = strftime("__", $date);

?>