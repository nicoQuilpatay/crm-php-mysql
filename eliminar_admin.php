
<?php
include_once "funciones.php";
$ok = eliminarAdmin($_GET["id"]);
if (!$ok) {
    echo "Error eliminando";
} else {
    header("Location: gestionAdmin.php");
}
