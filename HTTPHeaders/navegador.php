<!DOCTYPE html>
<?php
if (strpos($_SERVER["HTTP_USER_AGENT"], "Firefox") === false) {
    exit("Solo se puede acceder desde Firefox");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
    <h1>Navegador</h1>
    <p>Esta página sólo se mostrará en navegador Firefox.</p>
</body>
</html>