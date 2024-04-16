<?php

include 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO productos (id, nombre, descripcion, cantidad, precio) VALUES ('$id', '$nombre', '$descripcion', $cantidad, $precio)";

    if (mysqli_query($mysqli, $query)) {
       
        $mensaje = "Producto agregado correctamente";
        echo "<script>alert('Producto agregado correctamente');</script>";
    } else {
        echo "Error al agregar el producto: " . mysqli_error($mysqli);
    }
}
header("Location: productos.php?mensaje=" . $mensaje);
exit();
?>