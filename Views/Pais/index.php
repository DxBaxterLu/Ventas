<?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4>Paises</h4>
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#paisModal">
            <h6 class="align-self-center mb-0">
                Nuevo País
            </h6>
        </button>
        <table class="table table-dark table-bordered table-hover" id="tblPais">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="paisModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Nuevo País</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmPais">
                        <div class="form-group mt-2">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control mb-2" id="nombre" placeholder="Ingrese el Nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control mb-2" id="descripcion" placeholder="El pais posee los mejores...">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>