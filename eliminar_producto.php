<?php
include 'conexion.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM productos WHERE id = $id";

    if(mysqli_query($mysqli, $query)) {
        header("Location: productos.php");
        exit();
    } else {
        echo "Error al eliminar el producto: " . mysqli_error($mysqli);
    }
} else {
    echo "ID de producto no válido";
}

mysqli_close($mysqli);
?>