<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/tracking.svg" type="image/x-icon">
    <title>Solti Web</title>

    <!-- CSS -->
    <!-- CSS BOOSTRAPonly -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- BOOSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>

<body>
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
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <img src="./img/grid-3x3-gap.svg" alt="" sizes="4" srcset="">&nbsp;&nbsp;Administrativo
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-person-check-fill"></i>&nbsp;&nbsp;Usuario</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-grid-fill"></i>&nbsp;&nbsp;Roles</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;Cliente</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-diagram-3-fill"></i></i>&nbsp;&nbsp;Dependencias</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-person-badge"></i>&nbsp;&nbsp;Conductores</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-truck-flatbed"></i>&nbsp;&nbsp;Vehiculos</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-pin-angle-fill"></i>&nbsp;&nbsp;Ciudades</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-signpost-split-fill"></i>&nbsp;&nbsp;Departamento</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-signpost-2-fill"></i>&nbsp;&nbsp;Rutas</a>
                                <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-grid-1x2-fill"></i>&nbsp;&nbsp;Sucursal</a>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <i class="bi bi-gear"></i>&nbsp;&nbsp;Operativo
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Gestion de Solicitudes</a>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <i class="bi bi-person"></i>&nbsp;&nbsp; Cliente
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <i class="bi bi-cash-stack"></i>&nbsp;&nbsp; Facturacion
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10"></div>
            </div>
        </div>
    </main>
    <footer style="width: 100% ; position: absolute; bottom:0;">
        <div class="container-fluid  mb-2 bg-light text-dark ">
            <div class="text-center">
                <strong><a href="http://solti.co" target="_blank" rel="noopener noreferrer" class="link-secondary">solti.com</a></strong>
                <br>
                <span>Su mejor aliado en el trasporte de Mercancias</span>
            </div>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>