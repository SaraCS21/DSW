<?php

    require "./ComplexNumber.php";

    $number1 = new ComplexNumber(4, 2);
    $number2 = new ComplexNumber(2, -3);

    $sum = $number2->sum($number1);
    $number3 = new ComplexNumber($sum[0], $sum[1]);
    echo $number3;

?>