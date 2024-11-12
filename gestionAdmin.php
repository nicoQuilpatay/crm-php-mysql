
<?php
require 'funciones.php'; // Asegúrate de que la ruta a config.php sea correcta

session_start(); // Iniciar la sesión

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}



include_once "encabezado.php";
include_once "funciones.php";
if (!isset($_GET["busqueda"]) || empty($_GET["busqueda"])) {
    $clientes = obtenerClientesAdmin();
} else {
    $clientes = buscarClientes($_GET["busqueda"]);
}
?>

<div class="row">
    <div class="col-12">
        <h1>Panel de ADMIN</h1>
        <a href="registrarUsuario.php" class="btn btn-success mb-2">Agregar ADMIN</a>
        <form action="clientes.php">
            <div class="form-row align-items-center">
            </div>
        </form>
        <table class="table">
            <thead>

                <tr>
                    <th>Nombre</th>
                    <th>id</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente->username ?></td>
                        <td><?php echo $cliente->id ?></td>
                        <td>
                            <a class="btn btn-danger" href="eliminar_admin.php?id=<?php echo $cliente->id ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>