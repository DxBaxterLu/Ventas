<?php
class ClientesModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getClientes()
    {
        $sql = "SELECT * FROM clientes";
        $data = $this->select($sql);
        return $data;
    }
}
