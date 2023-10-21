<?php
session_start();
require_once('includes/funciones.php');
validarUsuario('cliente');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <center><h1>Productos para el Cliente</h1>
    <a href="carrito.php">Ver carrito</a>
    <a href="index.php">Cerrar sesión</a></center>
    <?php
    echo "<img src='producto1'>";
    ?>
</body>
</html>
