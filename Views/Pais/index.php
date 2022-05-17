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
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control mb-2" id="descripcion" placeholder="El pais posee los mejores...">
                </div>

                <button type="submit" class="btn btn-primary" onclick="frmPais(event);">Submit</button>
            </form>
        </div>
    </section>
</div>

<?php include "Views/Templates/footer.php";?>