<!DOCTYPE html>
<?php
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=productos.csv");
$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
foreach($productos as $key => $value) {
    echo "$key; $value<br/>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csv</title>
</head>
<body>
    
</body>
</html>