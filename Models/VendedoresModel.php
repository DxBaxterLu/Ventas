<?php
class VendedoresModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getVendedores()
    {
        $sql = "SELECT * FROM vendedores";
        $data = $this->select($sql);
        return $data;
    }
}