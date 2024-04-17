<?php
include 'conexion.php';

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id_producto = $_POST['id'];

    $query = "DELETE FROM productos WHERE id = $id_producto";

    if(mysqli_query($mysqli, $query)) {
        header("Location: productos.php");
        exit();
    } else {
        echo "Error al eliminar el producto: " . mysqli_error($conexion);
    }
} else {
    echo "ID de producto no válido";
}

mysqli_close($mysqli);
?>