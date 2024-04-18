<?php

require 'conexion.php';
require 'controlpanel.php';

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 30px;"><b>AGREGAR PRODUCTO</b></h3>
                </div>

                <div class="card card-success">
                    <div class="card-body">
                        <form action="productos.php" method="POST" style="font-size: 20px;">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE:</label>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">DESCRIPCIÓN:</label>
                                <input type="text" class="form-control" name="descripcion" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">CANTIDAD:</label>
                                <input type="number" class="form-control" name="cantidad" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">PRECIO:</label>
                                <input type="number" class="form-control" name="precio" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block"><b>AGREGAR NUEVO PRODUCTO</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
