<?php require('header.php')?>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="input-group">
                        <img src="./img/tracking.svg" alt="truck" width="60px" height="50px">
                        <a class="navbar-brand">Dashboard</a>
                    </div>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row vh-90 p-1">
                <div class="col-2">
                    <?php require('menu.php') ?>
                </div>
                <div class="col-10">
                    <section id="informativo">
                        <div class="container-fluid hv-50 p-1 ">
                            <div class="row vh-50">
                                <div class="col-4">
                                    <div class="accordion">
                                        <div class="accordion-item ">
                                            <h2 class="accordion-header bg-danger" id="headingOne">
                                                <button class="accordion-button bg-danger text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Solicitudes Diarias Pendientes
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show border border-danger" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body text-center" style="font-size: 30px;">
                                                    <a href="http://" target="_blank" rel="noopener noreferrer"><strong>30</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed bg-success text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Solicitudes Diarias en Proceso
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show border border-success" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-center" style="font-size: 30px;">
                                                <a href="http://" target="_blank" rel="noopener noreferrer"><strong>50</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed bg-warning text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Solicitudes Diarias Terminadas
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse show border border-warning" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body text-center" style="font-size: 30px;">
                                                <a href="http://" target="_blank" rel="noopener noreferrer"><strong>50</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </section>
                    <section>
                        <div class="container-fluid vh-20 p-1">
                            <div class="row">
                                <div class="col-6">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                    Consolidado de Solicitudes por mes.
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="according-body">
                                                    <canvas id="grafic_pedidos_mes"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                    Consolidado de Solicitudes por mes.
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="according-body">
                                                    <canvas id="grafic_pedidos_mesdos"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php require('footer.php') ?>