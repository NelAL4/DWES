<!DOCTYPE html>
<html>
<head>
    <title> Hola Mundo </title>
</head>
<body>
<?php
    $hMundo="Hola Mundo";
    echo "Hola mundo desde una variable: $hMundo";

    //Para concatenaer Strings se usa el punto singular ( . ):
    $hMundo2 = ", Hola mundo número 2";
    $hMundo3 = ", Hola Mundo numero 3";
    echo $hMundo.$hMundo2.$hmundo3; //la tercera variable lanza un warning pq esta declarada con
                                    // camelCase y llamada sin el. Unico caso en que si es sensible a mayusculas

    $h= "Hola";
    $m= "Mundo";
    echo "<br>" . $h . " " . $m;

    //calculadora simple
    $x=10;
    $y=5;

    //suma
    
    echo "<br> suma " . $x + $y;
    echo "<br> resta " . $x- $y;
    echo "<br> multi " . $x * $y;
    echo "<br> div " . $x / $y;


?>
</body>

</html>