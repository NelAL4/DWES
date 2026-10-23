<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $finde = array("6"=>"Sabado", "7"=>"Dominfo"); //Array de clave valor
        var_dump($finde);
        echo $finde["6"] ."<br>";

        $finde["7"] = "Domingo"; //cambiar valor en array <clave>/valor
        var_dump($finde);

        foreach($finde as $dias => $dia) {
            echo "<br>$dias: $dia ";
        }

        ?>
</body>
</html>