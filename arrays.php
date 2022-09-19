<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $nombres = array("Miquel", "Anna", "Dídac", "Josep", "Alejandro Acosta");
            echo "Array: [" . implode(", ", $nombres) . "]<br/>";
            echo "El array tiene " . count($nombres) . " elementos.<br/>";
            echo "String de nombres separados por espacios: " . implode(" ", $nombres) . "<br/>";
            $nombresSort = $nombres;
            asort($nombresSort);
            echo "Array ordenado alfabeticamente: [" . implode(", ", $nombresSort) . "]<br/>";
            echo "Array en el orden inverso al que se creó: [" . implode(", ", array_reverse($nombres)) . "]<br/>";
            echo "Posición de mi nombre (Josep) en el array: " . array_search("Josep", $nombres) . "<br/>";
            $alumnos = array(
                array(1, "Pedro", 22),
                array(2, "Maria", 23),
                array(3, "Laia", 22),
                array(4, "Modesto", 57)
            );
        ?>

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>
            <?php
                foreach($alumnos as $alumno) {
                    echo "<tr>";
                    foreach($alumno as $dato) {
                        echo "<td>" . $dato . "</td>";
                    }
                    echo "</tr>";
                }
                unset($alumno, $dato);
            ?>
        </table>

        <?php
            $nombresAlumnos = array_column($alumnos, 1);
            echo "Índice y nombre de cada alumno:<br/>";
            print_r($nombresAlumnos);
            echo "<br/>";

            $numeros = array();
            for ($i=0; $i < 10; $i++) { 
                $numeros[$i] = rand(0, 10);
            }
            echo "Sumna array de diez numeros: " . implode(" + ", $numeros) . " = " . array_sum($numeros) . "<br/>";
        ?>
    </p>
</body>
</html>
