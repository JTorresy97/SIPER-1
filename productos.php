<?php

require 'controlpanel.php';

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">LISTADO DE PRODUCTOS</h3>
                    <div class="card-tools">
                        <a class="btn btn-success" href="form_agregar.php" role="button">Agregar Nuevo Producto</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    Productos en Stock
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                        
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>