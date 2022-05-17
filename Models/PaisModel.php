<?php
class PaisModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPais()
    {
        $sql = "SELECT * FROM pais";
        $data = $this->select($sql);
        return $data;
    }
}