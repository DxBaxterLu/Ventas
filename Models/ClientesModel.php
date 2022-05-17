<?php
class ClientesModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setCliente(string $nombre, string $apellido, int $cedula, int $telefono, string $correo, string $direccion)
    {
        $query_insert = "INSERT INTO clientes(nombre, apellido, cedula, telefono, correo, direccion) VALUES (?,?,?,?,?,?)";
        $arrData = array($nombre, $apellido, $cedula, $telefono, $correo, $direccion);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    public function getCliente($id)
    {
        $sql = "SELECT * FROM clientes WHERE id = $id";
        $request = $this->select($sql);
        return $request;
    }

    public function updateCliente(int $id, string $nombre, string $apellido, int $cedula, int $telefono, string $correo, string $direccion)
    {
        $sql = "UPDATE clientes SET nombre = ?, apellido = ?, cedula = ?, telefono = ?, correo = ?, direccion = ? WHERE id = $id";
        $arrData = array($nombre, $apellido, $cedula, $telefono, $correo, $direccion);
        $request = $this->update($sql, $arrData);
        return $request;
    }

    public function getClientes()
    {
        $sql = "SELECT * FROM clientes";
        $request = $this->selectAll($sql);
        return $request;
    }

    public function deleteCliente($id)
    {
        $sql = "DELETE FROM clientes WHERE id = $id";
        $request = $this->delete($sql);
        return $request;
    }
}
