<?php
include 'conexion.php';
include 'controlpanel.php';

$alert_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $contacto = $_POST['contacto'];
        $direccion = $_POST['direccion'];
        $proveedor = $_POST['proveedor'];
        $estado = 1;
        $telefono = $_POST['telefono'];

        $query = "UPDATE proveedor SET contacto='$contacto', direccion='$direccion', proveedor='$proveedor', estado='$estado', telefono='$telefono' WHERE id=$id";
        $resultado = mysqli_query($mysqli, $query);

        if ($resultado) {
            $alert_message = 'Proveedor actualizado correctamente';
            echo '<script>alert("' . $alert_message . '"); window.location.href = "proveedores.php";</script>';
        } else {
            echo "Error al actualizar el proveedor: " . mysqli_error($mysqli);
        }
    } else {
        echo "ID de proveedor no válido";
    }
}

if ($_SERVER["REQUEST_METHOD"] != "POST" && isset($_GET['id']) && !empty($_GET['id'])) {
    $id_proveedor = $_GET['id'];

    $query = "SELECT * FROM proveedor WHERE id = $id_proveedor";
    $resultado = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $proveedor = mysqli_fetch_assoc($resultado);
    } else {
        echo "No se encontró el proveedor con el ID especificado";
    }
}

mysqli_close($mysqli);
?>




<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 40px;"><b>EDITAR PROVEEDOR</b></h3>
                </div>
                        <div class="card-body">


                            <?php if (!empty($alert_message)) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $alert_message; ?>
                                </div>
                            <?php endif; ?>
                            <form action="editar_proveedor.php" method="POST">
                                <?php if (isset($proveedor)) : ?>
                                    <input type="hidden" name="id" value="<?php echo $proveedor['id']; ?>">
                                    <div>
                                        <label for="proveedor" class="form-label">EMPRESA:</label>
                                        <input type="text" name="proveedor" id="proveedor" class="form-control" value="<?php echo $proveedor['proveedor']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="direccion" class="form-label">DIRECCIÓN:</label>
                                        <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $proveedor['direccion']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="contacto" class="form-label">CONTACTO:</label>
                                        <input type="text" name="contacto" id="contacto" class="form-control" value="<?php echo $proveedor['contacto']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="telefono" class="form-label">TELÉFONO:</label>
                                        <input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $proveedor['telefono']; ?>">
                                    </div><br>
                                    <div>
                                        <label for="estado" class="form-label">ESTADO:</label>
                                        <select name="estado" id="estado" class="form-control">
                                            <option value="1" <?php if ($proveedor['estado'] == 1) echo 'selected'; ?>>Activo</option>
                                            <option value="2" <?php if ($proveedor['estado'] == 2) echo 'selected'; ?>>Inactivo</option>
                                        </select>
                                    </div><br>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size: 30px;"><b>ACTUALIZAR PROVEEDOR</b></button>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>