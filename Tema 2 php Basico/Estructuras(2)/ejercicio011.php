<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //Imprime el valor de la variable $i siempre que sea menor que 5
        
        for ($x = 0; $x <= 100; $x+=10) {
            echo "<br>".$x;
            //Usar break; y continue; es mala practica
        }

    ?>
</body>
</html>