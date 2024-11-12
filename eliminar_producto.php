
<?php
include_once "funciones.php";
$ok = eliminarProducto($_GET["ProductoID"]);
if (!$ok) {
    echo "Error eliminando";
} else {
    header("Location: productos.php");
}
