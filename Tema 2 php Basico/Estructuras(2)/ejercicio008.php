<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //El dato por defecto debe ser String
    $nota="4";  //int
    $notaInt=6; //sttring
    $resultado = match ($nota) {
        0 => "Suspenso",
        "1" => "Suspenso",
        "2" => "Suspenso",
        "3" => "Suspenso",
        4 => "Suspenso",
        "5" => "Aprobado",
        6 => "Bien",
        "7" => "Notable",
        "8" => "Notable",
        "9" => "Sobresaliente",
        "10" => "Sobresaliente",
        default=> "Sin nota",
    };
    echo $resultado;

        $resultado2 = match ($notaInt) {
        0,1,2,3,4 => "Suspenso Int",
        "0","1","2","3","4"=> "Suspenso String",
        "5" => "Aprobado",
        "6" => "Bien",
        7,8 => "notable",
        "7","8" => "Notable String",
        9,10 => "Sobresaliente",
        "9","10" => "Sobresaliente",
        default=> "Sin nota",
    };
    echo "<br>" . $resultado2;

    ?>
</body>
</html>