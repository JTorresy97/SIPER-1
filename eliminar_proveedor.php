<?php
include 'conexion.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM proveedor WHERE id = $id";

    if(mysqli_query($mysqli, $query)) {
        header("Location: proveedores.php");
        exit();
    } else {
        echo "Error al eliminar el proveedor: " . mysqli_error($mysqli);
    }
} else {
    echo "ID de proveedor no válido";
}

mysqli_close($mysqli);
?>