var tblClientes;

document.addEventListener("DOMContentLoaded", function () {
  tblClientes = $("#tblClientes").DataTable({
    aProcessing: true,
    aServerSide: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
    },
    ajax: {
      //type: "GET",
      url: " " + base_url + "/Clientes/getClientes",
      //dataSrc: "",
    },
    columns: [
      { data: "id" },
      { data: "nombre" },
      { data: "apellido" },
      { data: "cedula" },
      { data: "telefono" },
      { data: "correo" },
      { data: "direccion" },
    ],
    responsive: "true",
    bDestroy: true,
    idisplayLenght: 10,
    order: [[0, "desc"]],
  });
});

$("#tblClientes").DataTable();

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
