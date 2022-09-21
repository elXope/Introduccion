<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort3</title>
</head>
<body>
    <?php
        $cadena = array(
            "ordenador" => "Aparato que ordena",
            "ratón" => "Tipo de rata más grande que se encuentra en espacios de informática",
            "pantalla" => "Superficie donde aparecen cosas",
            "teclado" => "Que tiene teclas"
        );
        print_r($cadena);
        echo "<br/>";
        uasort($cadena, function($cad1, $cad2) {
            if (strlen($cad1) == strlen($cad2)) {
                return 0;
            }
            return strlen($cad1) > strlen($cad2) ? 1 : -1;
        });
        print_r($cadena);
    ?>
</body>
</html>