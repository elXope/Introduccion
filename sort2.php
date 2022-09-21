<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort2</title>
</head>
<body>
    <?php
        $temp = "";
        for ($i=0; $i < 30; $i++) { 
            $temp = $temp . rand(12, 34) . " ";
        }
        $temp = $temp . rand(12, 34);
        echo "Cadena de temperaturas: " . $temp . "<br/>";

        $temp = explode(" ", $temp);
        echo "Media de temperaturas: " . array_sum($temp)/count($temp) . "<br/>";

        asort($temp);
        echo "Array de temperaturas ordenada ascendentemente: ";
        print_r($temp);

        echo "<br/>Temperaturas máximas: ";
        print_r(array_slice($temp, count($temp)-5));

        echo "<br/>Temperaturas mínimas: ";
        print_r(array_slice($temp, 0, 5));
    ?>
</body>
</html>