<?php
class Clientes extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function insertar()
    {
        $data = $this->model->setClientes("pepe", "aguilar", 12837495, 982734819, "pepe@gmail.com", "Totiuco");
        print_r($data);
    }
}
