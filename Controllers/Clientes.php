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
        $data = $this->model->setClientes("jose", "almeida", 12837495, 982734819, "jose@gmail.com", "Chaguarquingo");
        $data = $this->model->setClientes("lucho", "espinoza", 12837495, 982734819, "luchito@gmail.com", "Carapungo");
        print_r($data);
    }

    public function verCliente($id)
    {
        $data = $this->model->getCliente($id);
        print_r($data);
    }

    public function actualizar()
    {
        $data = $this->model->updateClientes(5, "Pepe", "Aguilar", 12837496, 982734818, "pepe@gmail.com", "Totiuco");
        print_r($data);
    }

    public function verClientes()
    {
        $data = $this->model->getClientes();
        print_r($data);
    }

    public function eliminarCliente($id)
    {
        $data = $this->model->deleteCliente($id);
        print_r($data);
    }
}
