
<?php include_once "encabezado.php";
require 'funciones.php'; // Asegúrate de que la ruta a config.php sea correcta

session_start(); // Iniciar la sesión

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once "funciones.php";
$clientes = obtenerClientes();
$productos = obtenerProductos();

?>
<div class="row">
    <div class="col-12">
        <h1>Registrar venta</h1>
        <form action="guardar_venta.php" method="post">
            <div class="form-group">
                <label for="id_cliente">Cliente</label>
                <select required name="id_cliente" id="id_cliente" class="form-control">
                    <?php foreach ($clientes as $cliente) { ?>
                        <option value="<?php echo $cliente->id ?>"><?php echo $cliente->nombre ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_producto">Producto</label>
                <select required name="id_producto" id="id_producto" class="form-control">
                    <?php foreach ($productos as $producto) { ?>
                        <option value="<?php echo $producto->ProductoID ?>"><?php echo $producto->Nombre ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="monto">Monto</label>
                <input required type="number" class="form-control" placeholder="Monto" name="monto" id="monto">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input required type="date" value="<?php echo date("Y-m-d") ?>" class="form-control" placeholder="Fecha" name="fecha" id="fecha">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>