<?php

session_start();
require 'conexion.php';

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}

$tipo_usuario = $_SESSION['tipo_usuario'];
$nombre = $_SESSION['nombre'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIPER sistema de información Papelería el Radar</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="image.png">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <!-- LOGO & BRAND -->
        <a class="navbar-brand ps-3" href="main.php">
            <img src="image.png" alt="logo" style="height: 30px; margin-left: 30px;">
            <b>SIPER</b><br>
            <i>Papelería El Radar</i></a>

        <!-- SIDEBAR TOOGLE -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- TOP NAVBAR -->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw" style="padding-left: 12px;"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li style="text-align: center"><?php echo $nombre; ?></li>
                    <hr class="dropdown-divider">
                    <li><a class="dropdown-item" href="#!">Configuración</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- LATERAL NAVBAR OPTIONS-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" style="margin-top: 30px;">
                            <div class="sb-nav-link-icon">

                                <i class="fa-solid fa-house"></i>
                            </div>INICIO
                        </a>

                        <div class="sb-sidenav-menu-heading">OPCIONES</div>

                        <a class="nav-link" href="productos.php">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-list" style="margin-right: 2px;"></i>
                            </div>Lista de Productos
                        </a>
                        
                        <a class="nav-link" href="venta.php">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-dollar-sign" style="margin-right: 8px;"></i>
                            </div>Realizar Venta
                        </a>
                        
                        <a class="nav-link" href="proveedores.php">
                            <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-truck-field"></i>
                            </div>Lista de Proveedores
                        </a>

                        <!-- SYSTEM CONFIGURATION -->
                        <div class="sb-sidenav-menu-heading">CONFIGURACIÓN</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>

                            Ajustes<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                <i class="fa-solid fa-star" style="margin-right: 10px;"></i> General</a>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                <i class="fa-solid fa-user" style="margin-right: 10px;"></i> Usuarios</a>

                            </nav>
                        </div>



                        <?php
                        if ($tipo_usuario == 1) { ?>

                        <!-- CONTENIDO DE LO QUE PUEDE VER EL USUARIO TIPO 1 "ADMINISTRADOR" -->
                        <!-- CONTENIDO DE LO QUE PUEDE VER EL USUARIO TIPO 1 "ADMINISTRADOR" -->
                        <!-- CONTENIDO DE LO QUE PUEDE VER EL USUARIO TIPO 1 "ADMINISTRADOR" -->
                        <!-- CONTENIDO DE LO QUE PUEDE VER EL USUARIO TIPO 1 "ADMINISTRADOR" -->

                        <?php } ?>

                        <br><br><br>

                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon">
                            <i class="fa-solid fa-circle-xmark"></i>
                            </div>Cerrar sesión</a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Sesión iniciada por:</div>
                    <?php
                    if (isset($_SESSION['nombre'])) {
                        echo $_SESSION['nombre'];
                    } ?>
                </div>
            </nav>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>