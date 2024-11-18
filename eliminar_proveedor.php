<?php
include_once "funciones.php";
$ok = eliminarProveedor($_GET["ProveedorID"]);

if ($ok === "clave_foranea") {
    echo "<script>alert('No se puede eliminar el proveedor porque está asociado a productos. Por favor, elimine los productos primero.');</script>";
    echo "<script>window.location.href = 'proveedor.php';</script>";
} elseif (!$ok) {
    echo "<script>alert('Ocurrió un error eliminando el proveedor.');</script>";
    echo "<script>window.location.href = 'proveedor.php';</script>";
} else {
    echo "<script>alert('Proveedor eliminado correctamente.');</script>";
    echo "<script>window.location.href = 'proveedor.php';</script>";
}
