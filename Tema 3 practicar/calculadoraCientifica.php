<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        $E=(int)10;
        $R=(int)5;
        $T=0.0;

        echo "<br>suma " . $E + $R;
        echo "<br>resta " . $E - $R;
        echo "<br>multiplicacion ". $E*$R;
        echo "<br>division " . $E/$R;
        echo "<br>resto: ". $E % $R;
        echo "<br>potencia: ". $E**$R; 
        echo "<br>negacion ". (-$E) . " " . (-$R);
        echo "<br>distinto(boolean):".($E<>$R);
        echo "<br>asignacion(5) : ".$T=$R;
        echo "<br>suma \" (10):".$T+=$R;
        echo "<br>resta \" (5):".$T-=$R;
        echo "<br>multi \" (25):".$T*=$R;
        echo "<br>division \" (5):".$T/=$R;
        echo "<br>resto \" (0):".$T%=$R;
        $T=$R;
        echo "<br>potencia \" (3125):".$T**=$R;
        $T=$R;
        echo "<br>concatenacion \" (55):".$T .= $R;
        echo "<br>preincremento(56):" . ++$T;
        echo "<br>predecremento(55):" . --$T;
        echo "<br>postincremento(55):" . $T++;
        echo "<br>postdecremento(56):" . $T--;

        echo "<br>si devuelve 1 es true. Nada significa false";
        echo "<br>igual a:" . ($T==$E);
        echo "<br>identico a:" . ($T===$R);
        echo "<br>Mayor que:" . ($T>$R);
        echo "<br>Menor que:" . ($T<$R);
        echo "<br>Diferente 1º:" . ($T<>$R);
        echo "<br>Diferente 2º:" . ($T!=$R);
        echo "<br>No identico:" . ($T!==$R);

        echo "<br>Y: " . ($T && $R) ; // vale and
        echo "<br>OR: " . ($T || $R) ; // vale or
        echo "<br>XOR: " . ($T xor $R) ;
        echo "<br>NOT: " . (!$T) . (!$R) ;
    ?>
</body>
</html>