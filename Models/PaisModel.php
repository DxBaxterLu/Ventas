<?php
class PaisModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setPais(string $nombre, string $descripcion)
    {
        $query_insert = "INSERT INTO pais(nombre, descripcion) VALUES (?,?)";
        $arrData = array($nombre, $descripcion);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    public function getPais($id)
    {
        $sql = "SELECT * FROM pais WHERE id = $id";
        $request = $this->select($sql);
        return $request;
    }

    public function updatePais(int $id, string $nombre, string $descripcion)
    {
        $sql = "UPDATE pais SET nombre = ?, descripcion = ? WHERE id = $id";
        $arrData = array($nombre, $descripcion);
        $request = $this->update($sql, $arrData);
        return $request;
    }

    public function getPaises()
    {
        $sql = "SELECT * FROM pais";
        $request = $this->selectAll($sql);
        return $request;
    }

    public function deletePais($id)
    {
        $sql = "DELETE FROM pais WHERE id = $id";
        $request = $this->delete($sql);
        return $request;
    }
}
