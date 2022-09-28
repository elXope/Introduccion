<!DOCTYPE html>
<?php
function seleccionarIdioma($lenguas, $lenguasPagina) {
    $lenguas = array_unique(array_map(function ($lengua) {
        return substr($lengua, 0, 2);
    },explode(",", $lenguas)));
    for($i = 0; $i < count($lenguas); $i++) {
        if (array_search($lenguas[array_keys($lenguas)[$i]], $lenguasPagina) !== false) {
            break;
        }
    }
    return $lenguas[array_keys($lenguas)[$i]];
}

$lenguasPagina = ["es", "en"];
$idioma = $_SERVER["HTTP_ACCEPT_LANGUAGE"] ??  "en";
// PROVES
// si la primera opció és anglés:
// $idioma[0] = "e";
// $idioma[1] = "n";
// si només té dos caràcters
// $idioma = substr($idioma, 0, 2);
// FIN PROVES
if ($idioma != "en") {
    $idioma = seleccionarIdioma($idioma, $lenguasPagina);
}
$titulo = array("es" => "Ejercicio Idioma Headers", "en" => "Headers Language Exercise");
$cuerpo = array("es" => "Este texto está en castellano.", "en" => "This text is in english.");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo[$idioma]?></title>
</head>
<body>
    <h1><?=$titulo[$idioma]?></h1>
    <p><?=$cuerpo[$idioma]?></p>
</body>
</html>