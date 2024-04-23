<?php

require 'conexion.php';
require 'controlpanel.php';

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title" style="font-size: 30px;"><b>AGREGAR PROVEEDOR</b></h3>
                </div>

                <div class="card card-success">
                    <div class="card-body">
                        <form action="proveedores.php" method="POST" style="font-size: 20px;">
                            <div class="mb-3">
                                <label for="proveedor" class="form-label">EMPRESA:</label>
                                <input type="text" class="form-control" name="proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">DIRECCIÓN:</label>
                                <input type="text" class="form-control" name="direccion" required>
                            </div>
                            <div class="mb-3">
                                <label for="contacto" class="form-label">CONTACTO:</label>
                                <input type="text" class="form-control" name="contacto" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">TELEFÓNO:</label>
                                <input type="text" class="form-control" name="telefono" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block"><b>AGREGAR NUEVO PROVEEDOR</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>