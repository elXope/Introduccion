<?php
    $nombres = array("Miquel", "Anna", "Dídac", "Alejandro Acosta");
    echo "Array: [" . implode(", ", $nombres) . "]<br/>";
    echo "El array tiene " . count($nombres) . " elementos.<br/>";
    echo "String de nombres separados por espacios: " . implode(" ", $nombres) . "<br/>";

?>