<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal"><?= $data['page_title'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmClientes" name="frmClientes">
                    <input type="hidden" id="id" name="id" value="">
                    <p class="text-primary"> Todos los campos son obligatorios. </p>

                    <div class="form-group mt-2">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control mb-2" id="nombre" name="nombre" placeholder="Ingrese el Nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control mb-2" id="apellido" name="apellido" placeholder="Ingrese el Apellido">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input type="number" class="form-control mb-2" id="cedula" name="cedula" placeholder="Ingrese la Cedula">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="tel" class="form-control mb-2" id="telefono" name="telefono" placeholder="Ingrese el Telefono">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control mb-2" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese el correo">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control mb-2" id="direccion" name="direccion" placeholder="1234 Main St">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="btnAction" class="btn btn-primary"><span id="btnText">Guardar</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>