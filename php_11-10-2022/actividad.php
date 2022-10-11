<?php

// Crea un array llamado nombres que contenga varios nombres
$array = ["Sara", "Pablo", "María", "Laura", "José", "Carlos"];

// Muestra el número de elementos que tiene el array (función count)
echo "Número de elementos: " . count($array) . "<br><br>";

// Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode)
$cadena = implode(" ", $array);
echo "Resultado de implode: " . $cadena . "<br><br>";

// Muestra el array ordenado alfabéticamente (función asort).
asort($array);
echo "Resultado en orden alfabético: " . implode(" ", $array) . "<br><br>";

// Muestra por pantalla las diferencias con ksort y con sort.
ksort($array);
echo "Resultado de ksort: " . implode(" ", $array) . " (Descendente)<br><br>";
sort($array);
echo "Resultado de sort: " . implode(" ", $array) . " (Ascendente)<br><br>";

// Muestra el array en el orden inverso al que se creó (función array_reverse)
$inverso = array_reverse($array);
echo "Resultado del array inverso: " . implode(" ", $inverso) . "<br><br>";

// Muestra la posición que tiene tu nombre en el array (función array_search)
$pos = array_search("Laura", $array);
echo "Posición del nombre Laura: " . $pos . "<br><br>";

// Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
$alumnos = array(
    array(
        "id" => "Al01",
        "nombre" => "Sara",
        "edad" => 22
    ),
    array(
        "id" => "Al02",
        "nombre" => "Pablo",
        "edad" => 22
    ),    
    array(
        "id" => "Al03",
        "nombre" => "María",
        "edad" => 23
    ),
    array(
        "id" => "Al04",
        "nombre" => "Laura",
        "edad" => 24
    ),
    array(
        "id" => "Al05",
        "nombre" => "José",
        "edad" => 27
    ),
    array(
        "id" => "Al06",
        "nombre" => "Carlos",
        "edad" => 21
    )
);

// Crea una tabla html en la que se muestren todos los datos de los alumnos.
echo "<h2>Tabla con los datos de los alumnos</h2><br>";
echo "<table style='width: 520px' >
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Edad</td>
            </tr>
        </thead>
        <tbody>
    ";
foreach ($alumnos as $alumno){
    echo "<tr><td>" . $alumno['id'] ."</td>";
    echo "<td>" . $alumno['nombre'] ."</td>";
    echo "<td>" . $alumno['edad'] ."</td></tr>";
}
echo "</tbody></table>";

// Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla.
$nombres = array_column($alumnos, 'nombre');
$nombres = implode("<br>", $nombres);
echo "<br>Nombre de los alumnos:<br>" . $nombres . "<br><br>";

// Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.
$numeros = [5, 4, 2, 6, 7, 3, 0, 1, 0, 3];
echo "Suma de los elementos: " . array_sum($numeros);

?>