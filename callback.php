<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callbacks</title>
</head>
<body>
    <?php
        $arreglo = array(
            "ordenador" => "Aparato que ordena",
            "ratón" => "Tipo de rata más grande que se encuentra en espacios de informática",
            "pantalla" => "Superficie donde aparecen cosas",
            "teclado" => "Que tiene teclas"
        );

        $long = array_map(function ($cadena) {
            return strlen($cadena);
        }, $arreglo);
        
        print_r($long);
        echo "<br/>Longitud máxima: " . max($long) . ". Longitud mínima: " . min($long) . ".";
    ?>
</body>
</html>