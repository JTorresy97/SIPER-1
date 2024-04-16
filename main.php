<?php

require 'controlpanel.php';

session_start();
require 'conexion.php';

if (!isset($_SESSION['id'])) {
    header("Location: tables.php");
}

$tipo_usuario = $_SESSION['tipo_usuario'];
$nombre = $_SESSION['nombre'];
$id = $_SESSION['id'];


if ($tipo_usuario == 1) {
    $where = "";
} else if ($tipo_usuario == 2) {
    $where = "WHERE id='$id'";
}

$sql = "SELECT * FROM usuario $where";
$resultado = $mysqli->query($sql);


?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Usuarios</h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Usuarios registrados
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Password</th>
                                    <th>Nombre</th>
                                    <th>Tipo Usuario</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Password</th>
                                    <th>Nombre</th>
                                    <th>Tipo Usuario</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php while ($row = $resultado->fetch_assoc()) { ?>

                                    <tr>
                                        <td><?php echo $row['usuario']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['tipo_usuario']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>