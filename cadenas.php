<?php
    $nombre = $_GET['nombre'] ?? 'Josep';
    $nombre = trim($nombre,"/");

    echo $nombre . "<br/>";
    echo strlen($nombre) . "<br/>";
    echo strtoupper($nombre) . "<br/>";
    echo strtolower($nombre) . "<br/>";

    $prefijo = $_GET['prefijo'] ?? null;
    if($prefijo != null && strpos($nombre,$prefijo) === 0){
        echo "El nombre empieza por $prefijo <br/>";
    }

    echo substr_count(strtolower($nombre),"a") . "<br/>";

    $primeraA = stripos($nombre, "a");
    if($primeraA === false) {
        echo "No hay ninguna 'a' <br/>";
    } else {
        echo $primeraA . "<br/>";
    }

    echo str_ireplace("o", "0", $nombre) . "<br/>";

    $url = 'http://username:password@hostname:9090/path?arg=value';
    echo "URL: $url<br/>";
    $url = parse_url($url);
    //protocolo, nombre de usuario, path url, querystring
    echo "Protocolo: " . $url["scheme"] . "<br/>";
    echo "Nombre de usuario: " . $url["user"] . "<br/>";
    echo "Path: " . $url["path"] . "<br/>";
    echo "Querystring: " . $url["query"] . "<br/>";
?>