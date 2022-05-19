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
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableClientes">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>apellido</th>
                                <th>cedula</th>
                                <th>telefono</th>
                                <th>correo</th>
                                <th>direccion</th>
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