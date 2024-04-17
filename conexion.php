<?php

$mysqli = new mysqli("localhost", "root", "", "sistema");

if (!$mysqli) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>