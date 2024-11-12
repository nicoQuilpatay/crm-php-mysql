<?php
require 'funciones.php';

session_start(); // Iniciar la sesión

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once "encabezado.php";

// Comprobar si se ha hecho una búsqueda
if (!isset($_GET["busqueda"]) || empty($_GET["busqueda"])) {
    $productos = obtenerProductos();
} 
$clientes = obtenerProveedores();

?>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Registrar producto</h1>
        <form action="guardar_producto.php" method="post">
            <div class="form-group">
                <label for="id_cliente">Proveedor</label>
                <select required name="ProveedorID" id="id_cliente" class="form-control">
                    <?php foreach ($clientes as $cliente) { ?>
                        <option value="<?php echo $cliente->ProveedorID ?>"><?php echo $cliente->Nombre ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="monto">Nombre</label>
                <input required type="text" class="form-control" placeholder="nombre" name="Nombre" id="monto">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <br>
        <br>
        <br>
        <h1 class="text-center">Lista de Productos</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Proveedor</th>
                    <th>ID</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
                    <tr>
                        <td><?php echo $producto->Nombre ?></td>
                        <td><?php echo $producto->ProveedorID ?></td>
                        <td><?php echo $producto->ProductoID ?></td>
                        <td>
                            <a class="btn btn-danger" href="eliminar_producto.php?ProductoID=<?php echo $producto->ProductoID ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "pie.php"; ?>