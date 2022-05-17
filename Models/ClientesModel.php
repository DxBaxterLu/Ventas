<?php
class ClientesModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setClientes(string $nombre, string $apellido, int $cedula, int $telefono, string $correo, string $direccion)
    {
        $query_insert = "INSERT INTO clientes(nombre, apellido, cedula, telefono, correo, direccion) VALUES (?,?,?,?,?,?)";
        $arrData = array($nombre, $apellido, $cedula, $telefono, $correo, $direccion);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    public function getClientes()
    {
        $sql = "SELECT * FROM clientes";
        $data = $this->select($sql);
        return $data;
    }
}
