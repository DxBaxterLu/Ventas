<?php
class Pais extends Controller
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
        $data = $this->model->setPais("Ecuador", "Mitad del Mundo");

        print_r($data);
    }

    public function verPais($id)
    {
        $data = $this->model->getPais($id);
        print_r($data);
    }

    public function actualizar()
    {
        $data = $this->model->updatePais(1, "Ecuador", "Mitad del mundo y venta de cuys");
        print_r($data);
    }

    public function verPaises()
    {
        $data = $this->model->getPaises();
        print_r($data);
    }

    public function eliminarPais($id)
    {
        $data = $this->model->deletePais($id);
        print_r($data);
    }
}
