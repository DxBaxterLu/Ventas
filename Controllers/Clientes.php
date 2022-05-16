<?php 
class Clientes extends Controller {
    public function index() {
        print_r($this->model->getClientes());
    }
}
