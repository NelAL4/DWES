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

        while($i<5){
            echo "<br>".$i;
            $i++;
        }

        //No recomendado:
        while($i<5):
            echo "<br>".$i;
            $i++;
        endwhile;
    ?>
</body>
</html>