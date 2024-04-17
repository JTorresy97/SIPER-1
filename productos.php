<?php

require 'controlpanel.php';

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($mysqli, $sql);

if (!$resultado) {
    echo "Error al consultar la base de datos: " - mysqli_error($mysqli);
    exit;
}

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">LISTADO DE PRODUCTOS</h3>
                    <div class="card-tools">
                        <a class="btn btn-success" href="form_agregar.php" role="button">Agregar Nuevo Producto</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    Productos en Stock
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php

                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>
                                        <td>{$fila['id']}</td>
                                        <td>{$fila['nombre']}</td>
                                        <td>{$fila['descripcion']}</td>
                                        <td>{$fila['cantidad']}</td>
                                        <td>{$fila['precio']}</td>
                                        <td>
                                            <a href='editar_producto.php?id={$fila['id']}' class='btn btn-primary'>Editar</a>
                                            <a href='eliminar_producto.php?id={$fila['id']}' class='btn btn-danger' onclick='return confirm(\"¿Estás seguro de querer eliminar este producto?\")'>Eliminar</a>
                                        </td>
                                    </tr>";
                        }

                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>