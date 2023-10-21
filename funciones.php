<?php
function validarUsuario($tipo) {
    if (!isset($_SESSION["usuario"]) || $_SESSION["usuario"] !== $tipo) {
        header("Location: index.php");
        exit();
    }
}
?>
