function openModal() {
  document.querySelector("#id").value = "";
  document
    .querySelector(".modalHeader")
    .classList.replace("headerUpdate", "headerRegister");
  document
    .querySelector("#btnAction")
    .classList.replace("btn-info", "btn-primary");
  document.querySelector("#btnText").innerHTML = "Guardar";
  document.querySelector("#titleModal").innerHTML = "Nuevo Cliente";
  document.querySelector("#frmClientes").reset;
  $("#clienteModal").modal("show");
}
