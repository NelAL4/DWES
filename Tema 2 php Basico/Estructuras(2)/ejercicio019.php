<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $findeNormal = [
            "sabado",
            "Domingo",
        ];

        $finde = [
            6 => "Sábado",
            1 => "Domingo" //con o sin coma en la ultima
        ];

        $findeVacio=[]; //creo array vacio
        $findeVacio[8] = "Sábado"; //le doy valor a la poscion cero. calve = 8, valor = "Sábado"

        $findeVacio2=[];
        $finde["S"]="Sábado"; //valor clave("S")/valor("Sábado")
        $finde["D"]="Domingo";

        $mix = [];
        $mix = [0]= "cadena";
        $mix = [1] = 1;
        $mix = [2] = 1.5;
        $mix = ["tres"] = 3;
            
    ?>
</body>
</html>