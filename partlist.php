<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partlist</title>
</head>
<body>
    <?php
        $arreglo = explode(" ", "Seguro que apruebo esta asignatura");
        $solucion = [];
        for($i = 1; $i < count($arreglo); $i++) {
            $solucion[$i - 1] = [implode(" ", array_slice($arreglo, 0, $i)), implode(" ", array_slice($arreglo, $i, array_key_last($solucion)))];
        }
        print_r($solucion);
    ?>
</body>
</html>