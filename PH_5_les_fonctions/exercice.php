<?php

calculator(5,3);
calculator(9,6);
calculator(6,9);




/**
 * Function : permettant de tratier les opérations d'addition, de soustraction, de multiplication et de division
 * @param mixed $number1, $number2
 */

function calculator($number1, $number2)
{
    echo "Nombre 1 : " . $number1 . "<br/>";
    echo "Nombre 2 : " . $number2 . "<br/>";
    echo "<br/>********************************<br/>";

    // Addition
    $totalAddition = $number1 + $number2;
    echo "ADDITION : <br/>";
    echo $number1 . " + " . $number2 . " = " . $totalAddition;
    echo "<br/>********************************<br/>";

    // Soustraction
    $totalSoustraction = $number1 - $number2;
    echo "SOUSTRACTION : <br/>";
    echo $number1 . " - " . $number2 . " = " . $totalSoustraction;
    echo "<br/>********************************<br/>";

    // Multiplication
    $totalMultiplication = $number1 * $number2;
    echo "SOUSTRACTION : <br/>";
    echo $number1 . " * " . $number2 . " = " . $totalMultiplication;
    echo "<br/>********************************<br/>";

    // Division
    $totalDivision = $number1 / $number2;
    echo "DIVISION : <br/>";
    echo $number1 . " / " . $number2 . " = " . $totalDivision;
    echo "<br/>********************************<br/>";
}
