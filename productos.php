<?php
require 'controlpanel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO productos (nombre, descripcion, cantidad, precio) VALUES ('$nombre', '$descripcion', $cantidad, $precio)";

    if (mysqli_query($mysqli, $query)) {
        header("Location: productos.php");
        exit();
    } else {
        echo "Error al agregar el producto: " . mysqli_error($mysqli);
    }
}


$sql = "SELECT * FROM productos";
$resultado = mysqli_query($mysqli, $sql);

if (!$resultado) {
    echo "Error al consultar la base de datos: " . mysqli_error($mysqli);
    exit;
}
?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>LISTADO DE PRODUCTOS</b></h3>
                    <div class="card-tools">
                        <a class="btn btn-success btn-lg" href="form_agregar.php" role="button">Agregar Nuevo Producto</a>
                    </div>
                </div>
                
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCIÓN</th>
                                <th>CANTIDAD</th>
                                <th>PRECIO</th>
                                <th>ACCIONES</th>
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
