
<?php
include_once "funciones.php";
$ok = agregarProducto($_POST["Nombre"],  $_POST["ProveedorID"]);
if ($ok) {
    header("Location: productos.php");
} else {
    echo "Error guardando Producto";
}
