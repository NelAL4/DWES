<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $finde = array("PASDJ","Domingo","ñ");
        $finde[0] = "Sábado";
        var_dump($finde);
        foreach($finde as $dia) {
            echo "$dia <br>";
        }
        ?>
</body>
</html>