<?php
ob_start();
require 'conexion.php';
require 'controlpanel.php';

session_start();

if (!isset($_SESSION['tipo_usuario']) || $_SESSION['tipo_usuario'] != 1) {
    header("Location: usuarios.php");
    exit;
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars(trim($_POST['usuario']), ENT_QUOTES, 'UTF-8');
    $nombre = htmlspecialchars(trim($_POST['nombre']), ENT_QUOTES, 'UTF-8');
    $password = trim($_POST['password']);
    $tipo_usuario = (int) $_POST['tipo_usuario'];

    if (empty($usuario) || empty($nombre) || empty($password) || $tipo_usuario < 1) {
        $mensaje = "Todos los campos son obligatorios.";
    } else {
        $password_hashed = sha1($password);

        $query = "INSERT INTO usuario (usuario, nombre, password, tipo_usuario) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);

        if ($stmt) {
            $stmt->bind_param("sssi", $usuario, $nombre, $password_hashed, $tipo_usuario);
            $resultado = $stmt->execute();

            if ($resultado) {
                $mensaje = "Usuario agregado correctamente";
                header("Location: usuarios.php");
                exit;
            } else {
                $mensaje = "Error al agregar el usuario: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $mensaje = "Error al preparar la consulta: " . $mysqli->error;
        }
    }
}

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h2>Agregar Usuario</h2>
                <p><?php echo $mensaje; ?></p> 
                <a href="usuarios.php" class="btn btn-primary">Volver a Usuarios</a>
            </div>
        </main>
    </div>
</div>
