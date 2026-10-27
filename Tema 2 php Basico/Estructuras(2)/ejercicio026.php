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
        $comidaNoSaludable = ["Pizza","hamburguesa", "chocholate"];
        $comida=array_merge($frutas, $comidaNoSaludable); //junta arrays
        var_dump($comida);

        
        
    ?>
</body>
</html>