function frmClientes(e) {
  e.preventDefault();
  /*const nombre = document.getElementById("nombre");
  const apellido = document.getElementById("apellido");
  const cedula = document.getElementById("cedula");
  const telefono = document.getElementById("telefono");
  const correo = document.getElementById("correo");
  const direccion = document.getElementById("direccion");

  if (nombre.value == "") {
    nombre.classList.add("is-invalid");
    apellido.classList.remove("is-invalid");
    cedula.classList.remove("is-invalid");
    telefono.classList.remove("is-invalid");
    correo.classList.remove("is-invalid");
    direccion.classList.remove("is-invalid");
  } else if (apellido.value == "") {
    nombre.classList.remove("is-invalid");
    apellido.classList.add("is-invalid");
    cedula.classList.remove("is-invalid");
    telefono.classList.remove("is-invalid");
    correo.classList.remove("is-invalid");
    direccion.classList.remove("is-invalid");
  } else if (cedula.value == "") {
    nombre.classList.remove("is-invalid");
    apellido.classList.remove("is-invalid");
    cedula.classList.add("is-invalid");
    telefono.classList.remove("is-invalid");
    correo.classList.remove("is-invalid");
    direccion.classList.remove("is-invalid");
  } else if (telefono.value == "") {
    nombre.classList.remove("is-invalid");
    apellido.classList.remove("is-invalid");
    cedula.classList.remove("is-invalid");
    telefono.classList.add("is-invalid");
    correo.classList.remove("is-invalid");
    direccion.classList.remove("is-invalid");
  } else if (correo.value == "") {
    nombre.classList.remove("is-invalid");
    apellido.classList.remove("is-invalid");
    cedula.classList.remove("is-invalid");
    telefono.classList.remove("is-invalid");
    correo.classList.add("is-invalid");
    direccion.classList.remove("is-invalid");
  } else if (direccion.value == "") {
    nombre.classList.remove("is-invalid");
    apellido.classList.remove("is-invalid");
    cedula.classList.remove("is-invalid");
    telefono.classList.remove("is-invalid");
    correo.classList.remove("is-invalid");
    direccion.classList.add("is-invalid");
  } else {
    const url = base_url + "Clientes/validar";
    const frm = document.getElementById("frmClientes");
    const http = new XMLHttpRequest();

    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        console.log(this.responseText);
      }
    };
  }*/
}
