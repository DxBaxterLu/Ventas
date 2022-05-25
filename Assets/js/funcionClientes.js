var btn_cargar = document.getElementById("btnCargar"),
  tabla = document.getElementById("tblClientes");

var cli_nombre,
  cli_apellido,
  cli_cedula,
  cli_telefono,
  cli_correo,
  cli_direccion;

function cargarClientes() {
  tabla.innerHTML =
    "<thead><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Cedula</th><th>Telefono</th><th>Correo</th><th>Direccion</th></tr></thead>";

  var peticion = XMLHttpRequest();
  peticion.open("GET", "http://localhost/Ventas/Clientes/getClientes");

  peticion.onload = function () {
    var data = JSON.parse(peticion.responseText);

    for (let i = 0; i < data.length; i++) {
      var elemnt = document.createElement("tr");
      elemnt.innerHTML += "<td>" + data[i].id + "</td>";
      elemnt.innerHTML += "<td>" + data[i].nombre + "</td>";
      elemnt.innerHTML += "<td>" + data[i].apellido + "</td>";
      elemnt.innerHTML += "<td>" + data[i].cedula + "</td>";
      elemnt.innerHTML += "<td>" + data[i].telefono + "</td>";
      elemnt.innerHTML += "<td>" + data[i].correo + "</td>";
      elemnt.innerHTML += "<td>" + data[i].direccion + "</td>";
      document.getElementById("tblClientes").appendChild(elemnt);
    }
  };

  peticion.send();
}

btn_cargar.addEventListener("click", function () {
  cargarClientes();
});

// var tableClientes;

// document.addEventListener("DOMContentLoaded", function () {
//   tableClientes = $("#tableClientes").DataTable({
//     success: function (data) {
//       let datos = $.parseJSON(data);
//       console.log(datos);

//       var t = $("#tableClientes").DataTable();

//       $.each(datos, function (index, value) {
//         t.rows
//           .add([
//             value.id,
//             value.nombre,
//             value.apellido,
//             value.cedula,
//             value.telefono,
//             value.correo,
//             value.direccion,
//           ])
//           .draw(false);
//       });
//     },
//   });
// });

// //$("#tableClientes").DataTable();

// function openModal() {
//   /*document.querySelector("#id").value = "";
//   document.querySelector(".modalHeader").classList.replace("headerUpdate", "headerRegister");
//   document
//     .querySelector("#btnAction")
//     .classList.replace("btn-info", "btn-primary");
//   document.querySelector("#btnText").innerHTML = "Guardar";
//   document.querySelector("#titleModal").innerHTML = "Nuevo Cliente";
//   document.querySelector("#frmClientes").reset;*/
//   $("#clienteModal").modal("show");
// }
