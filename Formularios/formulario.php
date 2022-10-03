<!DOCTYPE html>
<?php
function filtrado($datos) {
    return stripslashes(trim($datos));
}
$extensionesAvatar = ["jpg", "png"];
$directorioSubida = "./avatares";
$nombre = "";
$correo = "";
$estudios = "";
$pathDefAvatar = "";
$muestra = false;

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];
    !empty($_POST["nombre"]) ?: $errores[] = "El nombre es requerido";
    !empty($_POST["correo"]) && filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL) !== false ?: $errores[] = "No se ha indicado el email o el formato no es correcto";
    //comprovacions imatge
    if (empty($_FILES["avatar"]["name"]) || !in_array(pathinfo($_FILES["avatar"]["name"])["extension"], $extensionesAvatar)) {
        $errores[] = "No se ha adjuntado un avatar o el formato no es valido";
    }
        
    if (empty($errores)) {
        $nombre = filtrado($_POST["nombre"]);
        $correo = filtrado($_POST["correo"]);
        $estudios = $_POST["estudios"];
        $pathDefAvatar = $directorioSubida . "/" . pathinfo($_FILES["avatar"]["name"])["filename"] . "." . pathinfo($_FILES["avatar"]["name"])["extension"];
        move_uploaded_file($_FILES["avatar"]["tmp_name"], $pathDefAvatar);
        $muestra = true;
    } else {
        foreach ($errores as $err0r) {
            echo $err0r . "<br/>";
        }
    }
}

if ($muestra) {
    echo "<br/>Nombre: $nombre<br/>Correo: $correo<br/>Estudios: $estudios<br/>Imagen:<br/>";
    echo "<img src=$pathDefAvatar><img/>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        Nombre: <input type="text" maxlength="50" name="nombre"/><br/>
        Correo: <input type="email" name="correo"/><br/>
        Estudios:
            <select name="estudios">
                <option value="sin-estudios">Sin estudios</option>
                <option value="eso">ESO</option>
                <option value="bachillerato">Bachillerato</option>
                <option value="grado-universitario">Grado Universitario</option>
                <option value="grado-medio">Grado Medio</option>
                <option value="grado-superior">Grado Superior</option>
            </select><br/>
        Avatar: <input type="file" name="avatar"/><br/>
        <input type="submit" name="submit"/><br/>
    </form>
</body>
</html>