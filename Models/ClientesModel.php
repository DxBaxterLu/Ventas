<?php
class ClientesModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getClientes(string $nombre, string $apellido, int $cedula, int $telefono, string $correo, string $direccion)
    {
        $sql = "SELECT * FROM clientes WHERE nombre = '$nombre' AND apellido = '$apellido' AND cedula = '$cedula' AND telefono = '$telefono' AND correo = '$correo' AND direccion = '$direccion'";
        $data = $this->select($sql);
        return $data;
    }
}
