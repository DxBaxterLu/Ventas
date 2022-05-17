<?php include "Views/Templates/header.php"; ?>

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
                        <div class="card-header bg-dark">
                            <h6 class="font-weight-bold text-light"> Número de Ventas </h6>
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
                        <div class="card-header bg-dark">
                            <h6 class="font-weight-bold text-light"> Mas Vendidos </h6>
                        </div>
                        <div class="card-body pt-2">
                            <div class="d-flex border-bottom py-2 mb-3 ">
                                <div class="d-flex mr-3">
                                    <h3 class="align-self-center mb-0">
                                        <ion-icon name="pricetags"></ion-icon> &nbsp
                                    </h3>
                                </div>
                                <div class="align-self-center">
                                    <h6 class="d-inline-block mb-0"> $250 </h6><span class="font-weight-bold ml-2"> BMW </span>
                                    <small class="d-block text-muted"> Concecionario: Autocons</small>
                                </div>
                            </div>

                            <div class="d-flex border-bottom py-2 mb-3 ">
                                <div class="d-flex mr-3">
                                    <h3 class="align-self-center mb-0">
                                        <ion-icon name="pricetags"></ion-icon> &nbsp
                                    </h3>
                                </div>
                                <div class="align-self-center">
                                    <h6 class="d-inline-block mb-0"> $250 </h6><span class="font-weight-bold ml-2"> BMW </span>
                                    <small class="d-block text-muted"> Concecionario: Autocons</small>
                                </div>
                            </div>
                            <button class="btn btn-dark w-100">Ver Mas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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