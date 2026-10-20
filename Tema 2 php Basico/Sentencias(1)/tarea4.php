<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>

<?php
echo "-----CALCULADORA CIENTIFICA-----". "<br>";

$a = 10;
$b = 5;

echo "-----Funciones Principales:-----" . "<br>";

echo "Suma: " . ($a + $b) . "<br>";
echo "Resta: " . ($a - $b) . "<br>";
echo "Multiplicación: " . ($a * $b) . "<br>";
echo "División: " . ($a / $b) . "<br>";

echo "-----Operadores Aritmeticos Extra-----" . "<br>";

echo "Resto:" . ($a % $b) . "<br>";
echo "Potencia: " . ($a ** $b) . "<br>";
echo "Negacion: " . (-$a) . (-$b) . "<br>";
echo "Distinto: " . ($a <> $b) . "<br>"; // tambien se puede hacer !=

echo "----- Asignacion -----" . "<br>";

echo "Asignacion: " . ($a = $b) . "<br>";
echo "Suma Asignacion: " . ($a += $b) . "<br>";
echo "Resta Asignacion: " . ($a -= $b) . "<br>";
echo "Multiplicacion Asignacion: " . ($a *= $b) . "<br>";

echo "Division Asignacion: " . ($a /= $b) . "<br>";
echo "Resto Asignacion: " . ($a %= $b) . "<br>";
echo "Potencia Asignacion: " . ($a **= $b) . "<br>";
echo "Concatenacion: " . ($a .= $b) . "<br>";

echo "----- Incremento Y Decremento -----" . "<br>";

echo "PreIncremento: " . (++$a) . (++$b) . "<br>";
echo "PostIncremento: " . ($a++) . ($b++) . "<br>";
echo "PreDecremento: " . (--$a) . (--$b) . "<br>";
echo "PostDecremento: " . ($a--) . ($b--) . "<br>";

echo "----- Comparación -----" . "<br>";

echo "Igual: " . ($a == $b) . "<br>";
echo "Identico: " . ($a === $b) . "<br>";
echo "Mayor que: " . ($a > $b) . "<br>";
echo "Menor que: " . ($a < $b) . "<br>";

echo "Mayor o igual que: " . ($a >= $b) . "<br>";
echo "Menor o igual que: " . ($a <= $b) . "<br>";
echo "Diferente: " . ($a != $b) . "<br>";
echo "No identico: " . ($a !== $b) . "<br>";

echo "----- Operadores Logicos -----" . "<br>";

echo "Y: " . ($a && $b) . "<br>"; //Tambien se puede utilizar and
echo "O: " . ($a || $b) . "<br>"; // Tambien se puede utilizar or
echo "XOR: " . ($a xor $b) . "<br>";
echo "NOT: " . (!$a) . (!$b) . "<br>";


?>
</body>
</html>


