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
        
        $i = 3;
        do {
            if($i<5)continue; //MALA PRACTICA
            if($i==5)break;//MALA PRACTICA
            echo $i;
            $i++;
        }while($i<11)


    ?>
</body>
</html>