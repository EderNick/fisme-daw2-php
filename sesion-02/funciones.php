<?php

function media_aritmetica($a, $b)
{
    return ($a + $b) / 2;
}

$x = 50;
$y = 100;
echo "La media aritmética de $x y $y es: " . media_aritmetica($x, $y) . "<br>";


$sumar = fn($a, $b) => $a + $b; // Arrow Function, para sumar dos números

echo "La suma de $x y $y es: " . $sumar($x, $y) . "<br>";


function dividir($a, $b)
{
    if ($b != 0) {
        $resp = $a / $b;
    } else {
        $resp = "Error: División por cero";
    }
    return $resp;
};
