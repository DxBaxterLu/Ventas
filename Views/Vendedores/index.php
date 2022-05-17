<?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header card-header-primary">
        <h4>Vendedor</h4>
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#vendedorModal">
            <h6 class="align-self-center mb-0">
                Nuevo Vendedor
            </h6>
        </button>
        <table class="table table-light table-bordered table-hover" id="tblVendedor">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Sector</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="vendedorModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Nuevo Vendedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmVendedores" name="frmVendedores">
                        <input type="hidden" id="id" name="id" value="">
                        <p class="text-primary"> Todos los campos son obligatorios. </p>

                        <div class="form-group mt-2">
                            <label for="Codigo">Codigo</label>
                            <input type="text" class="form-control mb-2" id="Codigo" name="Codigo" placeholder="Ingrese el Codigo">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control mb-2" id="nombre" placeholder="Ingrese el Nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control mb-2" id="apellido" placeholder="Ingrese el Apellido">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control mb-2" id="telefono" placeholder="Ingrese el Telefono">
                        </div>
                        <div class="form-group">
                            <label for="listConcesionarioId">Concesionario</label>
                            <select name="listConcesionarioId" id="listConcesionarioId" class="form-control" required></select>
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