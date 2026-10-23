<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        //$frutas = array ("platano", "manzana", "pera"); //equivalente
        $frutas = ["platano", "manzana", "pera"];
        array_push($frutas, "LIMONACO"); //aññade al final
        array_unshift($frutas, "FRESACA"); //al principio
        var_dump($frutas);
        echo "<br>";

        array_pop($frutas); //eliminamos el último
        array_shift($frutas); //eliminamos el primero
        var_dump($frutas);
        
        
    ?>
</body>
</html>