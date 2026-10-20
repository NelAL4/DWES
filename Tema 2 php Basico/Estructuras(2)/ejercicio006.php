<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Q=20;
    if($Q<13){
        echo "Buenos Dias";
    }else if($Q<21){ //elseif junto vale
        echo "Buenas tardes";
    }else{
        echo "Buenas noches";
    }
    ?>
</body>
</html>