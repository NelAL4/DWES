<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $clase = array ("Lunes"=>"1", "Martes"=>"2", "Miércoles"=>"3","Jueves"=>"4","Viernes"=>"5");
        foreach ($clase as $key => $value){
            echo "$key : $value <br>";
        }
    ?>
</body>
</html>