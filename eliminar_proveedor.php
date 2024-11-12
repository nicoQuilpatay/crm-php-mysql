
<?php
include_once "funciones.php";
$ok = eliminarProveedor($_GET["ProveedorID"]);
if (!$ok) {
    echo "Error eliminando";
} else {
    header("Location: proveedor.php");
}
