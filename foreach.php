<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
        $colores = array("blanco", "verde", "rojo");
    ?>
    <ul>
        <?php
            foreach ($colores as $color) {
                echo "<li>" . $color . "</li>";
            }
        ?>
    </ul>
</body>
</html>