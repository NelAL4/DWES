<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
</head>
<body>
    <?php /*H/h -> hora  i -> Minutos(la M la usa Month)  s -> segundos*/
        echo "La hora es ".date("H:i:s")."<br>";    /*   H -> formato 24h   h -> formato 12 horas   */ 
        echo "La hora es ".date("h:i:s a")."<br>";  /*   h -> formato 12 horas    a -> am/pm        */
    ?>
</body>
</html>