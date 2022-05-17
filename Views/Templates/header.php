<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bienvenido</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/style.css">
</head>

<body>
    <div class="d-flex">
        <div id="sidebar-container" class="bg-dark text-white">
            <div class="logo">
                <a href="<?php echo base_url;?>">
                    <h4 class="text-light font-weight-bold"> Proyecto</h4>
                </a>
            </div>
            <div class="menu">
                <a href="<?php echo base_url; ?>Clientes" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="people" class="mr-3 lead"></ion-icon> Clientes
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="globe" class="mr-3 lead"></ion-icon> Pais
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="business" class="mr-3 lead"></ion-icon> Concesionarios
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="car" class="mr-3 lead"></ion-icon> Productos
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="people" class="mr-3 lead"></ion-icon>Vendedores
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="cart" class="mr-3 lead"></ion-icon> Venta
                </a>
            </div>
        </div>

        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <form class="d-flex position-relative my-2">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-search position-absolute" type="submit">
                            <ion-icon name="search"></ion-icon>
                        </button>
                    </form>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    David
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Configuración</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>