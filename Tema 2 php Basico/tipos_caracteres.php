<!DOCTYPE html>
<html>
<head>
    <title>Hola mundo</title>
</head>
<body>

<?php

    $vacio = "<br>";

    $x1 = '-Estamos en el  \'Doctor Fleming \' desde las 8:30h';

    echo $x1;
    echo $vacio;

    $x2 = "-Estamos en el  \"Doctor Fleming \" desde las 8:30h";

    echo $x2;
    echo $vacio;

    $x3 = "-Escribimos el valor de la variable \$x";

    echo $x3;
    echo $vacio;

    $x4 = "-Hola \t mundo";

    echo $x4;
    echo $vacio;

    $x6 = "-\110\145";

    echo $x6;
    echo $vacio;

    $y = "-\x48";

    echo $y;
    echo $vacio;

    $x7 = acos(8);

    var_dump($x7);
    var_dump(is_nan($x7));

    
    // entero 
    $a = 5;

    // Float
    $b = 5.34;

    //Cadena
    $c = "Hola";

    //Boolean
    $d = true;

    // Null
    $e = NULL;

    var_dump($a);
    echo $vacio;

    $a = (string) $a;

    var_dump($a);
    echo $vacio;

    $b = (string) $b;

    var_dump($b);
    echo $vacio;

    $c = (string) $c;
    
    var_dump($c);
    echo $vacio;

    $d = (string) $d;
    
    var_dump($d);
    echo $vacio;

    $d = (string) $e;
    
    var_dump($e);
    echo $vacio;

    $x8 = 5;
    $y8 = 10;

    echo ($x8 <=> $y8);
    echo $vacio;

?>
</body>
</html>