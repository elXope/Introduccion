<!DOCTYPE html>
<?php
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
$id = $_GET["id"] ?? -1;
if (!array_key_exists($id, $productos)) {
    exit("No existe el producto");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <p>Ejercicio 1 de cabeceras de respuesta.<br/>Producto solicitado: <?=$productos[$id]?></p>
</body>
</html>