<!DOCTYPE html>
<?php
session_start();
echo session_id() . "<br/>"; //Se pot posar un id com a argument per a canviar el identificador de sessió, i s'hauria de posar esta instrucció primer

$_SESSION["logged_in_user_id"] = "1";
$_SESSION["logged_in_user_name"] = "Tutsplus";

echo $_SESSION["logged_in_user_id"] . "<br/>";
echo $_SESSION["logged_in_user_name"] . "<br/>";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba sesion</title>
</head>
<body>

</body>
</html>