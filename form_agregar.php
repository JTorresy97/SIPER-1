<?php

require 'conexion.php';
require 'controlpanel.php';

?>

<div id="layoutAuthentication" class="container-fluid" style="position: relative;">
    <div id="layoutAuthentication_content" class="container-fluid">
        <main>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Agregar Nuevo Producto</h3>
                            </div>
                            <div class="card-body">
                                <form action="agregar_producto.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre del producto" required>
                                        <label for="nombre">Nombre del producto</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto" style="height: 100px;" required></textarea>
                                        <label for="descripcion">Descripción del producto</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="cantidad" name="cantidad" type="number" placeholder="Cantidad" required>
                                                <label for="cantidad">Cantidad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="precio" name="precio" type="number" step="0.01" placeholder="Precio" required>
                                                <label for="precio">Precio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Agregar Producto</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>