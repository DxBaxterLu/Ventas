<?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4>Clientes</h4>
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#clienteModal">
            <h6 class="align-self-center mb-0">
                Nuevo Cliente
            </h6>
        </button>
        <table class="table table-dark table-bordered table-hover" id="tblClientes">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModal">Nuevo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmClientes">
                        <input type="hidden" id="id" name="id" value="">
                        <p class="text-primary"> Todos los campos son obligatorios. </p>

                        <div class="form-group mt-2">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control mb-2" id="nombre" placeholder="Ingrese el Nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control mb-2" id="apellido" placeholder="Ingrese el Apellido">
                        </div>
                        <div class="form-group">
                            <label for="cedula">Cedula</label>
                            <input type="number" class="form-control mb-2" id="cedula" placeholder="Ingrese la Cedula">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control mb-2" id="telefono" placeholder="Ingrese el Telefono">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control mb-2" id="correo" aria-describedby="emailHelp" placeholder="Ingrese el correo">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control mb-2" id="direccion" placeholder="1234 Main St">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btnAction" class="btn btn-primary"><span id="btnText">Guardar</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>