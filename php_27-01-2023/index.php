<?php

    require "./entity/ImagenGaleria.php";

    $arr = [];

    for ($i=1; $i <= 12; $i++) { 
        $imgGaleria = new ImagenGaleria("$i.jpg", "imagen $i");
        array_push($arr, $imgGaleria);
    };

    // var_dump($arr);

    for ($id=1; $id <= 3; $id++) { 
        $active = $id === 1;
        $idCategoria = "category$id";

        shuffle($arr);
        include "./partials/image-gallery.part.php";
    }

?>