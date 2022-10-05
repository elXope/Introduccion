<!DOCTYPE html>
<?php
//funciones necesarias

class Usuario {
    private int $id;
    private string $username;
    private string $email;
    private string $password;

    public function __construct(string $username, string $email, string $password, int $id = -1, ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public static function filtrado($dato) {
        return stripslashes(trim($dato));
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_username($username) {
        $this->username = filtrado($username);
    }

    public function set_email($email) {
        $this->email = filtrado($email);
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_username() {
        return $this->username;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_password() {
        return $this->password;
    }

    public function __toString() {
        return "Username: $this->username <br/>Id: $this->id<br/>Email: $this->email<br/>Contraseña: $this->password";
    }
}

//1) comprobar valores
$usuario;
$empezarConexion = false;
if (isset($_POST["registrarse"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];
    !empty($_POST["username"]) ?: $errores[] = "El nombre es requerido.";
    !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) !== false ?: $errores[] = "No se ha indicado el email o el formato no es correcto.";
    !empty($_POST["contra"]) && !empty($_POST["confirmaContra"]) && $_POST["contra"] == $_POST["confirmaContra"] ?: $errores[] = "Contraseña no válida.";
     
    if (empty($errores)) {
        $usuario = new Usuario($_POST["username"], $_POST["email"], $_POST["contra"]);
        $empezarConexion = true;
    } else {
        foreach ($errores as $err0r) {
            echo $err0r . "<br/>";
        }
    }
}

//2) conectar a la bdd
if($empezarConexion) {
    $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
    );

    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=proyecto1;charset=utf8',
        'root',
        'sa',
    $opciones);

    //3) comprobar que sean únicos (nombre y correo)
    $pdoUsername = $pdo->prepare('SELECT username FROM users WHERE username = ?');
    $pdoEmail = $pdo->prepare('SELECT email FROM users WHERE email = ?');
    $username = $usuario->get_username();
    $email = $usuario->get_email();
    $pdoUsername->bindParam(1, $username);
    $pdoEmail->bindParam(1, $email);
    $pdoUsername->execute();
    $pdoEmail->execute();

    if (empty($pdoUsername->fetchAll()) && empty($pdoEmail->fetchAll())) {
        //4) registrar los valores a la bdd
        $pdoInsertar = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
        $pdoInsertar->bindParam(1, $username);
        $pdoInsertar->bindParam(2, $email);
        $password = $usuario->get_password();
        $pdoInsertar->bindParam(3, $password);
        if($pdoInsertar->execute()) {
            echo "Registro completado!";
            $pdoRecuperar = $pdo->prepare('SELECT * FROM users WHERE username = ?');
            $pdoRecuperar->bindParam(1, $username);
            $pdoRecuperar->execute();
            $usuario = $pdoRecuperar->fetch(PDO::FETCH_CLASS,'Usuario');
            echo $usuario;
        } else {
            echo "Registro fallido.";
        }
    } else {
        echo "El usuario o email ya estan registrados";
    }
    
    
    //5) cerrar la conexión
    $pdo = null;
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form method="POST">
        <label for="username">Nombre de usuario</label><br/>
        <input type="text" name="username"/><br/>
        <label for="email">Correo Electrónico</label><br/>
        <input type="email" name="email"/><br/>
        <label for="contra">Contraseña</label><br/>
        <input type="password" name="contra"/><br/>
        <label for="confirmaContra">Confirma la contraseña</label><br/>
        <input type="password" name="confirmaContra"/><br/>
        <input type="submit" name="registrarse" value="Registrarse"/>
    </form>
</body>
</html>