<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola món!</h1>
    <?php
        echo date("d/m/o");
        $parrafo = "Esto es una cadena";
        $x = 3;
        $y = 2;
    ?>
    <br/>
    <p><?= $parrafo ?></p>
    <p><?= $x % $y ?></p>

    <?php
        $meteors = array(
            'Hoba' => 6000000,
            'Cape York' => 58200000,
            'Campo del Cielo' => 5000000,
            'Canyon Diablo' => 3000000,
        );
        print_r($meteors);
        echo "<hr>";
        foreach($meteors as $meteor){
            echo $meteor . "<br/>";
        }
    ?>
</body>
</html>