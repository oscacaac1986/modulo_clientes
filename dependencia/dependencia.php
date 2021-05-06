<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/tracking.svg" type="image/x-icon">
    <title>Solti Web</title>

    <!-- CSS -->
    <!-- CSS BOOSTRAPonly -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- BOOSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    

</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <div class="row">
                    <div class="input-group">
                        <img src="../img/dependencias.svg" alt="truck" width="60px" height="50px">
                        <a class="navbar-brand">Dependencias</a>
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
        <div class="row ">
            <div class="col-2">
                <?php require('../menu.php') ?>
            </div>
            <div class="col-10">
                <section class="">
                    <div class="container-fluid">
                        <div class="row p-2">
                            <table class="table table-bordered display" id="prueba">
                                <thead class="text-center table table-primary">
                                    <tr>
                                        <td><strong>Id</strong></td>
                                        <td><strong>Nombre</strong></td>
                                        <td><strong>Editar</strong></td>
                                        <td><strong>Eliminar</strong></td>
                                    </tr>
                                </thead>
                                <tbody id="Contenido_tabla"></tbody>


                            </table>
                        </div>
                    </div>
                </section>
                <section>
                    <dic class="row">
                        <div class="container-fluid">
                            <table id="pueba"></table>
                        </div>
                    </dic>
                </section>
                <section>
                    <div class="container-fluid">
                        Insertar Nueva Dependencia:
                        <div class="row">

                        </div>
                    </div>
                </section>
            </div>
        </div>



    </main>
    <footer >
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
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

   <!-- Jquery Datatable -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
   
   
   
   
   <!-- char.js Library for grafic stadistic -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- datatables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    <!-- archivo_graficas  -->
    <!-- <script src="graficas.js"></script> -->

    <!-- JS dependencias -->
    <script src="./js/dependencias.js"></script>
    

</body>

</html>