<?php

include 'conexion.php';
include 'controlpanel.php';

$mensaje = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO productos (nombre, descripcion, cantidad, precio) VALUES ('$nombre', '$descripcion', $cantidad, $precio)";

    if (mysqli_query($mysqli, $query)) {
        $mensaje = "Producto agregado correctamente";
    } else {
        $mensaje = "Error al agregar el producto: " . mysqli_error($mysqli);
    }
}

?>

