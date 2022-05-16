<?php
class Clientes extends Controller
{
    public function index()
    {
        print_r($this->model->getClientes());
    }

    public function validar()
    {
        if (empty($_POST['nombre'] || $_POST['apellido'] || $_POST['cedula'] || $_POST['telefono'] || $_POST['correo'] || $_POST['direccion'])) {
            $msg = "Los campos estan vacios";
        } else {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $cedula = $_POST['cedula'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            $data = $this->model->getClientes($nombre, $apellido, $cedula, $telefono, $correo, $direccion);
        }

        print_r($data);
        die();
    }
}
