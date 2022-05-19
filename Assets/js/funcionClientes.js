var tableClientes;

document.addEventListener("DOMContentLoaded", function () {
  tableClientes = $("#tableClientes").DataTable({
    success: function (data) {
      let datos = $.parseJSON(data);
      console.log(datos);

      var t = $("#tableClientes").DataTable();

      $.each(datos, function (index, value) {
        t.rows
          .add([
            value.id,
            value.nombre,
            value.apellido,
            value.cedula,
            value.telefono,
            value.correo,
            value.direccion,
          ])
          .draw(false);
      });
    },
  });
});

//$("#tableClientes").DataTable();

function openModal() {
  /*document.querySelector("#id").value = "";
  document.querySelector(".modalHeader").classList.replace("headerUpdate", "headerRegister");
  document
    .querySelector("#btnAction")
    .classList.replace("btn-info", "btn-primary");
  document.querySelector("#btnText").innerHTML = "Guardar";
  document.querySelector("#titleModal").innerHTML = "Nuevo Cliente";
  document.querySelector("#frmClientes").reset;*/
  $("#clienteModal").modal("show");
}
