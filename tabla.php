<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border=1>";
        $contador=3;
        $lado=10;
        for ($n1=1; $n1<=$lado; $n1++){
            echo "<tr>";
            for ($n2=1; $n2<=$lado; $n2++){
                $primo=false;
                while($primo === false){
                    for ($n3=2; $n3<$contador; $n3++){
                        if (0 == $contador%$n3){
                            $contador++;
                            break;
                        } elseif ($n3 == $contador-1) {
                            $primo = true;
                        }
                    }
                }
                echo "<td>$contador</td>";
                $contador++;
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>