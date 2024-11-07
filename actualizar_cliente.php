<?php
require 'funciones.php'; // Asegúrate de que la ruta a config.php sea correcta

session_start(); // Iniciar la sesión

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}



include_once "funciones.php";
$ok = actualizarCliente($_POST["nombre"], $_POST["edad"], $_POST["departamento"], $_POST["id"]);
if (!$ok) {
    echo "Error actualizando.";
} else {
    header("Location: clientes.php");
}
