<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $coches = array ("marca" => "toyota", "modelo"=>"corolla");
        $coches["color"] = "Negro mate";
        $coches += ["año" => 2026];
        var_dump($coches);
    ?>
</body>
</html>