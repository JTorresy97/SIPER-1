<?php
require 'conexion.php';
require 'controlpanel.php';

$alert_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $tipo_usuario = $_POST['tipo_usuario'];

        $query = "UPDATE usuario SET nombre=?, tipo_usuario=? WHERE id=?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssi", $nombre, $tipo_usuario, $id);
        $resultado = $stmt->execute();

        if ($resultado) {
            $alert_message = 'Usuario actualizado correctamente';
            echo '<script>alert("' . $alert_message . '"); window.location.href = "usuarios.php";</script>';
        } else {
            echo "Error al actualizar el usuario: " . $mysqli->error;
        }
    } else {
        echo "ID de usuario no válido";
    }
}

if ($_SERVER["REQUEST_METHOD"] != "POST" && isset($_GET['id']) && !empty($_GET['id'])) {
    $id_usuario = $_GET['id'];

    $query = "SELECT * FROM usuario WHERE id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
    } else {
        echo "No se encontró el usuario con el ID especificado";
    }
}

$mysqli->close();
?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 40px;"><b>EDITAR USUARIO</b></h3>
                </div>
                <div class="card-body">
                    <form action="editar_usuario.php" method="POST">
                        <?php if (isset($usuario)) : ?>
                            <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
                            <div>
                                <label for="nombre" class="form-label">NOMBRE:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>">
                            </div><br>
                            <div>
                                <label for="tipo_usuario" class="form-label">TIPO DE USUARIO:</label>
                                <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                                    <option value="1" <?php if ($usuario['tipo_usuario'] == 1) echo 'selected'; ?>>Administrador</option>
                                    <option value="2" <?php if ($usuario['tipo_usuario'] == 2) echo 'selected'; ?>>Usuario</option>
                                </select>
                            </div><br>
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size: 30px;"><b>ACTUALIZAR USUARIO</b></button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
