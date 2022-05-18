<?php
class Clientes extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page_title'] = "Nuevo Clientes";
        $this->views->getView($this, "index", $data);
    }

    public function insertar()
    {
        //$data = $this->model->setCliente("pepe", "aguilar", 12837495, 982734819, "pepe@gmail.com", "Totiuco");
        //$data = $this->model->setCliente("jose", "almeida", 12837495, 982734819, "jose@gmail.com", "Chaguarquingo");
        //$data = $this->model->setCliente("lucho", "espinoza", 12837495, 982734819, "luchito@gmail.com", "Carapungo");
        //print_r($data);
    }

    public function verCliente($id)
    {
        //$data = $this->model->getCliente($id);
        //print_r($data);
    }

    public function actualizar()
    {
        //$data = $this->model->updateCliente(5, "Pepe", "Aguilar", 12837496, 982734818, "pepe@gmail.com", "Totiuco");
        //print_r($data);
    }

    public function getClientes()
    {
        $data = $this->model->selectClientes();

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function eliminarCliente($id)
    {
        //$data = $this->model->deleteCliente($id);
        //print_r($data);
    }
}
