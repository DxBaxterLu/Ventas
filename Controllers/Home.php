<?php
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['tag_page'] = "Home";
        $data['page_title'] = "Proyecto Ventas";
        $data['page_name'] = "home";
        $this->views->getView($this, "index", $data);
    }
}
