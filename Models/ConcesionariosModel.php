<?php
class ConcesionariosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getConcesionarios()
    {
        $sql = "SELECT * FROM concesionarios";
        $data = $this->select($sql);
        return $data;
    }
}