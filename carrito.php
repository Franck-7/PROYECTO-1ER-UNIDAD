<?php
session_start();
require_once('includes/funciones.php');
validarUsuario('cliente');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <center><h1>Carrito de Compras</h1>
    <!-- Mostrar el resumen de productos seleccionados, subtotales y total aquí -->
    <a href="productos.php">Continuar comprando</a>
    <a href="index.php">Cerrar sesión</a></center>
</body>
</html>
