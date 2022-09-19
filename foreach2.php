<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach2</title>
</head>
<body>
    <?php
        $colores = array("blanco" => "blanco.html", "verde" => "verde.html", "rojo" => "rojo.html");
        echo "<ul>";
        foreach ($colores as $color) {
            echo "<li><a href='" . $color . "'>" . array_search($color, $colores) . "</a></li>";
        }
        echo "</ul>";
    ?>
</body>
</html>