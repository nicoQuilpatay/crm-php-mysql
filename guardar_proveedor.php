
<?php
include_once "funciones.php";
$ok = agregarProveedor($_POST["nombre"]);
if ($ok) {
    header("Location: proveedor.php");
} else {
    echo "Error guardando venta";
}
