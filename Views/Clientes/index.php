<?php include "Views/Templates/header.php";?>

<div class="card">
    <div class="card-header card-header-primary">
        Clientes
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" onclick="frmClientes();"><ion-icon name="add-outline"></ion-icon></button>
        <table class="table table-light table-bordered table-hover" id="tblClientes">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="nuevo_cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="title">Nuevo Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmClientes">
                    <div class="form-floating mb-3">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del nombre">
                        <label for="nombre">Nombre</label>
                    </div>
    
                    <button class="btn btn-primary" type="button" onclick="registrarCliente(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php";?>