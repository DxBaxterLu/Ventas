<?php include "Views/Templates/header.php"; ?>

<div id="container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-3">
                    <form id="frmClientes">
                        <div class="form-group mt-2">
                            <label for="sector">Sector</label>
                            <input type="text" class="form-control mb-2" id="sector" placeholder="Ingrese el Sector">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control mb-2" id="nombre" placeholder="Ingrese el Nombre">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="tel" class="form-control mb-2" id="telefono" placeholder="Ingrese el Telefono">
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="frmConcesionarios(event);">Submit</button>
                    </form>
                </div>
                <div class="col-lg-8 mt-4">
                    <table class="table table-striped" id="tblClientes">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sector</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "Views/Templates/footer.php"; ?>