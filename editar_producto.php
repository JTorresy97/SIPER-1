<?php
include 'conexion.php';
include 'controlpanel.php';

$alert_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];

        $query = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', cantidad=$cantidad, precio=$precio WHERE id=$id";
        $resultado = mysqli_query($mysqli, $query);

        if ($resultado) {
            $alert_message = 'Producto actualizado correctamente';
            echo '<script>alert("' . $alert_message . '"); window.location.href = "productos.php";</script>';
        } else {
            echo "Error al actualizar el producto: " . mysqli_error($mysqli);
        }
    } else {
        echo "ID de producto no válido";
    }
}

if ($_SERVER["REQUEST_METHOD"] != "POST" && isset($_GET['id']) && !empty($_GET['id'])) {
    $id_producto = $_GET['id'];

    $query = "SELECT * FROM productos WHERE id = $id_producto";
    $resultado = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $producto = mysqli_fetch_assoc($resultado);
    } else {
        echo "No se encontró el producto con el ID especificado";
    }
}

mysqli_close($mysqli);
?>




<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 40px;"><b>EDITAR PRODUCTO</b></h3>
                </div>
                        <div class="card-body">


                            <?php if (!empty($alert_message)) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $alert_message; ?>
                                </div>
                            <?php endif; ?>
                            <form action="editar_producto.php" method="POST">
                                <?php if (isset($producto)) : ?>
                                    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                                    <div>
                                        <label for="nombre" class="form-label">NOMBRE:</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $producto['nombre']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="descripcion" class="form-label">DESCRIPCIÓN:</label>
                                        <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $producto['descripcion']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="cantidad" class="form-label">CANTIDAD:</label>
                                        <input type="number" name="cantidad" id="cantidad" class="form-control" value="<?php echo $producto['cantidad']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="precio" class="form-label">PRECIO:</label>
                                        <input type="number" name="precio" id="precio" class="form-control" value="<?php echo $producto['precio']; ?>">
                                    </div><br>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size: 30px;"><b>ACTUALIZAR PRODUCTO</b></button>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>