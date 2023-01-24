<?php
    require "./Employee.php";
    $empleado1 = new Employee("Juan", 2000);
    $empleado1->impuestos();
    echo "<br>";
    
    $empleado2 = new Employee("Pepe", 3200);
    $empleado2->impuestos();
    echo "<br>";
    
    $empleado1 = clone $empleado2;

    $result1 = ($empleado1 == $empleado2) ? "Iguales" : "Distintos";
    echo $result1;
    echo "<br>";

    $result2 = ($empleado1 === $empleado2) ? "Iguales" : "Distintos";
    echo $result2;
    echo "<br>";
?>