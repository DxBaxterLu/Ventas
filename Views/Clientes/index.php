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
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="tblClientes">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Cedula</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Dirección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <th><?php echo $dato->$id; ?></th>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "Views/Templates/footer.php"; ?>