<!DOCTYPE html>
<?php
// $_GET["dejameEntrar"] == 1 ?: header('Location:login.php');
if ($_GET["dejameEntrar"] == 1) {
    header('Location:login.php');
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>
<body>
    <h1>Bienvenido</h1>
</body>
</html>