<?php
class ProductosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProductos()
    {
        $sql = "SELECT * FROM productos";
        $data = $this->select($sql);
        return $data;
    }
}