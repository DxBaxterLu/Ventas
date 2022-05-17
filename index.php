<?php

require_once 'Config/Config.php';
require_once 'Config/Helper.php';

$ruta = !empty($_GET['url']) ? $_GET['url'] : "Home/index";
$array = explode("/", $ruta);
//print_r($array);

$controller = $array[0];
$metodo = "index";
$parametro = "";

if (!empty($array[1])) {
    if (!empty($array[1] != "")) {
        $metodo = $array[1];
    }
}

if (!empty($array[2])) {
    if (!empty($array[2] != "")) {
        for ($i = 2; $i < count($array); $i++) {
            $parametro .= $array[$i] . ",";
        }
        $parametro = trim($parametro, ",");
    }
}

require_once 'Config/App/autoload.php';
$controller = ucwords($controller);

$dirControllers = "Controllers/" . $controller . ".php";
//echo $dirControllers;

if (file_exists($dirControllers)) {
    require_once $dirControllers;
    $controller = new $controller();
    if (method_exists($controller, $metodo)) {
        $controller->$metodo($parametro);
    } else {
        echo 'Pagina no Econtrada';
    }
} else {
    echo 'No existe las pagina';
}

//echo $controller;
//echo $metodo;
//echo $parametro;

//print_r($parametro);
