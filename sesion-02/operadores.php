<?php
$a = 10;
$b = 6;

$suma = $a + $b;
$resta =  $a - $b;
$multip = $a * $b;
$division = $a / $b;
$resto = $a % $b;
$potencia = $a ** $b;

echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "Multiplicación: $multip <br>";
echo "División: $division <br>";
echo "Resto: $resto <br>";
echo "Potencia: $potencia <br>";

echo "######## OPERADORES RELACIONALES ######### <br>";
$resultado = $a == $b;
echo "$a==$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a === $b;
echo "$a===$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a != $b;
echo "$a!=$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a > $b;
echo "$a>$b : " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a >= $b;
echo "$a>=$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a < $b;
echo "$a<$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a <= $b;
echo "$a<=$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";

$resultado = $a <=> $b;
echo "$a<=>$b: " . (($resultado) ? "Verdadero" : "Falso") . " <br>";



echo "######## OPERADORES LÓGICOS #########";
$conjuncion = ($a % 2 == 0) && ($b % 2 == 0);

$disyuncion = ($a % 2 == 0) || ($b % 2 == 0);

$negacion = !($a % 2 == 0);

$xor = ($a % 2 == 0) xor ($b % 2 == 0);

echo "<br>Conjunción: " . (($conjuncion) ? "Verdadero" : "Falso") . " <br>";
echo "<br>Disyunción: " . (($disyuncion) ? "Verdadero" : "Falso") . " <br>";
echo "<br>Negación: " . (($negacion) ? "Verdadero" : "Falso") . " <br>";
echo "<br>XOR: " . (($xor) ? "Verdadero" : "Falso") . " <br>";
