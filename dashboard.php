<?php
session_start();
require_once('includes/funciones.php');
validarUsuario('administrador');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard del Administrador</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <center><h1>Administrador</h1>
    
    <a href="index.php">Cerrar sesión</a></center>
</body>
</html>