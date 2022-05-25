<?php include "Views/Templates/header.php";
getModal('modalClientes', $data);
?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4>Clientes</h4>
    </div>
    <div class="card-body">
        <button class="btn btn-dark mb-2" type="button" data-bs-toggle="modal" data-bs-target="#clienteModal" onclick="openModal();">
            <h6 class="align-self-center mb-0">
                Nuevo
            </h6>
        </button>

        <div class="row">
            <div class="col-md-12">
                <div>
                    <button id="btnCargar" class="btn btn-dark mb-2">
                        Cargar Clientes
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tblClientes">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cedula</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <?php include "Views/Templates/footer.php"; ?>