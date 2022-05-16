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
                <a href="#">
                    <h4 class="text-light font-weight-bold"> Proyecto</h4>
                </a>
            </div>
            <div class="menu">
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="people" class="mr-3 lead"></ion-icon> Clientes
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="globe" class="mr-3 lead"></ion-icon> Pais
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="car" class="mr-3 lead"></ion-icon> Productos
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="business" class="mr-3 lead"></ion-icon> Concecionario
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="people" class="mr-3 lead"></ion-icon>Vendedores
                </a>
                <a href="#" class="d-block p-3 mb-2 text-light">
                    <ion-icon name="cart" class="mr-3 lead"></ion-icon> Ventas
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

            <div id="content">
                <section class="py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <h1 class="font-weight-bold mb-0">Bienvenido</h1>
                                <p class="lead text-muted">Aqui la ultima informacion</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">
                                                Ventas Mensuales
                                            </h6>
                                            <h3 class="text-weight-bold">
                                                $50.000
                                            </h3>
                                            <h6 class="text-success">
                                                50.50%
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">
                                                Ventas Mensuales
                                            </h6>
                                            <h3 class="text-weight-bold">
                                                $50.000
                                            </h3>
                                            <h6 class="text-success">
                                                50.50%
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">
                                                Ventas Mensuales
                                            </h6>
                                            <h3 class="text-weight-bold">
                                                $50.000
                                            </h3>
                                            <h6 class="text-success">
                                                50.50%
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">
                                                Ventas Mensuales
                                            </h6>
                                            <h3 class="text-weight-bold">
                                                $50.000
                                            </h3>
                                            <h6 class="text-success">
                                                50.50%
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold">Número de Ventas</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold">
                                            Mas Vendidos
                                        </h6>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="d-flex border-bottom py-2 mb-3 ">
                                            <div class="d-flex mr-3">
                                                <h3 class="align-self-center mb-0">
                                                    <ion-icon name="pricetags"></ion-icon>
                                                </h3>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span class="font-weight-bold ml-2"> BMW </span>
                                                <small class="d-block text-muted">Concecionario: Autocons</small>
                                            </div>
                                        </div>

                                        <div class="d-flex border-bottom py-2 mb-3 ">
                                            <div class="d-flex mr-3">
                                                <h3 class="align-self-center mb-0">
                                                    <ion-icon name="pricetags"></ion-icon>
                                                </h3>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span class="font-weight-bold ml-2"> BMW </span>
                                                <small class="d-block text-muted">Concecionario: Autocons</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100">Ver Mas</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js" integrity="sha256-ErZ09KkZnzjpqcane4SCyyHsKAXMvID9/xwbl/Aq1pc=" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',

            data: {
                labels: [
                    'January', 'February', 'March', 'April'
                ],

                maxBarThickness: 30,

                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2],
                }]
            },

            options: {}
        });
    </script>
</body>

</html>