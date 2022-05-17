<?php
class ConcesionariosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setConcesionario(string $sector, string $nombre, int $telefono)
    {
        $query_insert = "INSERT INTO concesionarios(sector, nombre, telefono) VALUES (?,?,?)";
        $arrData = array($sector, $nombre, $telefono);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }

    public function getConcesionario($id)
    {
        $sql = "SELECT * FROM concesionarios WHERE id = $id";
        $request = $this->select($sql);
        return $request;
    }

    public function updateConcesionario(int $id, string $sector, string $nombre, int $telefono)
    {
        $sql = "UPDATE concesionarios SET sector = ?, nombre = ?, telefono = ? WHERE id = $id";
        $arrData = array($sector, $nombre, $telefono);
        $request = $this->update($sql, $arrData);
        return $request;
    }

    public function getConcesionarios()
    {
        $sql = "SELECT * FROM concesionarios";
        $request = $this->selectAll($sql);
        return $request;
    }

    public function deleteConcesionario($id)
    {
        $sql = "DELETE FROM concesionarios WHERE id = $id";
        $request = $this->delete($sql);
        return $request;
    }
}
