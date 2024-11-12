
<?php include_once "encabezado.php";
require 'funciones.php'; // Asegúrate de que la ruta a config.php sea correcta

session_start(); // Iniciar la sesión

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once "funciones.php";
$proveedores = obtenerProveedores();

?>
<div class="row">
    <div class="col-12">
        <h1>Registrar proveedor</h1>
        <form action="guardar_proveedor.php" method="post">
            <div class="form-group">
                <label for="monto">Nombre</label>
                <input required type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
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
        <h1 class="text-center">Lista de Proveedores</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>ID</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proveedores as $proveedor) { ?>
                    <tr>
                        <td><?php echo $proveedor->Nombre ?></td>
                        <td><?php echo $proveedor->ProveedorID ?></td>
                        <td>
                            <a class="btn btn-danger" href="eliminar_proveedor.php?ProveedorID=<?php echo $proveedor->ProveedorID ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "pie.php"; ?>