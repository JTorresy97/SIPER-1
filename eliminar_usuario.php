<?php

include 'conexion.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM usuario WHERE id = $id";

    if(mysqli_query($mysqli, $query)) {
        header("Location: usuarios.php");
        exit();
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($mysqli);
    }
} else {
    echo "ID de usuario no válido";
}

mysqli_close($mysqli);
?>

