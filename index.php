<!DOCTYPE html>
<html>
<head>
    <title>E-Franco</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
                        <center><h1>¡Bienvenido!</h1></center>
<body>
    <?php
    require_once('includes/funciones.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        $usuarios = [
            "administrador" => "asd",
            "cliente" => "123"
        ];

        if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] === $contrasena) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            if ($usuario === "administrador") {
                header("Location: dashboard.php");
            } else {
                header("Location: productos.php");
            }
        } else {
            echo '<center><h1><p style="color: red;">Contraseña/Usuario incorrectos</p></h1></center>';
            
        }
    }
    ?>
<center>
    <style>
    .centrado{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    </style>
    <div class="centrado">
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="text" id="contrasena" name="contrasena" required><br>

        <input type="submit" value="Iniciar sesión">
    </form>
    <div>
</center>
</body>
</html>