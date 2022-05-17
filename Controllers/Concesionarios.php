<?php
class Concesionarios extends Controller
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
        $data = $this->model->setConcesionario("Quiumbe", "Autocons", 1457683);

        print_r($data);
    }

    public function verConcesionario($id)
    {
        $data = $this->model->getConcesionario($id);
        print_r($data);
    }

    public function actualizar()
    {
        $data = $this->model->updateConcesionario(1, "Quiumbee", "Autoconsss", 145768333);
        print_r($data);
    }

    public function verConcesionarios()
    {
        $data = $this->model->getConcesionarios();
        print_r($data);
    }

    public function eliminarConcesionario($id)
    {
        $data = $this->model->deleteConcesionario($id);
        print_r($data);
    }
}
