<?php include "Views/Templates/header.php";?>

<div id="container">
    <section>
        <div class="container">
            <form id="frmClientes">
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
                <button type="submit" class="btn btn-primary" onclick="frmClientes(event);">Submit</button>
            </form>
        </div>
    </section>
</div>

<?php include "Views/Templates/footer.php";?>