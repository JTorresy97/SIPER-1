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
            <div class="container-fluid">
                <h1 class="mt-4">USUARIOS</h1>

                <div class="card bg-success ">


                    <div class="card-body bg-light">
                        <table id="datatablesSimple" style="font-size: 20px;">
                            <thead>
                                <tr>
                                    <th>USUARIO</th>
                                    <th>NOMBRE</th>
                                    <th>TIPO DE USUARIO</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>USUARIO</th>
                                    <th>NOMBRE</th>
                                    <th>TIPO USUARIO</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php while ($row = $resultado->fetch_assoc()) { ?>

                                    <tr>
                                        <td><?php echo $row['usuario']; ?></td>
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