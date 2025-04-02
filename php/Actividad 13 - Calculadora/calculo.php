<?php
    $numOne = $_POST['numOne'];
    $numTwo = $_POST['numTwo'];
    $operacion = $_POST['operacion'];
    $total;

    /*echo "<h2> Número 1: $numOne</h2>";
    echo "<h2> Número 2: $numTwo</h2>";
    echo "<h2> Operación: $operacion</h2>";*/

    if ($operacion == 1) {
        $total = $numOne + $numTwo;
    } else if ($operacion == 2) {
        $total = $numOne - $numTwo;
    } else if ($operacion == 3) {
        $total = $numOne * $numTwo;
    } else {
        $total = $numOne / $numTwo;
    }

    echo "<h2> Total: $total</h2>";
?>