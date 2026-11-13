<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo date_default_timezone_get();//da el del servidor
        echo "<br>";
        //Madrid
        date_default_timezone_set("Europe/Madrid");
        echo "La fecha y hora actual es ".date("d-m-Y H:i:s")."<br>";
        //canarias
        date_default_timezone_set("Atlantic/Canary");
        echo "La fecha y hora actual es ".date("d-m-Y H:i:s")."<br>";
        //Tiempo Unix (desde el 1 de enero de 1970 a las 0:00 hpras GMT(Hora Meridiano de Greenwich))
        //mktime(hour, minute, second, month day, year)
    ?>
</body>
</html>