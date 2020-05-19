<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> <!--Fuente de google fonts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> <!--Enlace al cdn de chart.js-->
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">CorAnalytics</a>
              <div class="bottom-border pb-3">
                <img src="images/personIcon.png" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white">Enrique Salcines</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Perfil</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Buz&oacuten</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>Ventas</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>An&aacutelisis</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Gr&aacuteficas</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>Tablas</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Ajustes</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>Documentaci&oacuten</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Buscar...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">¿Qui&eacuteres salir?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->

    <!-- cards -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-3">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                      <div class="text-right text-secondary">
                        <h5>Ventas</h5>
                        <h3>134.948€</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Actualizar</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5>Gastos</h5>
                        <h3>39.675€</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Actualizar</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-users fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>Usuarios</h5>
                        <h3>15.648</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Actualizar</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-chart-line fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>Visitantes</h5>
                        <h3>43.148</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Actualizar</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of cards -->
    
    <!-- charts -->

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row mb-5">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <!--
                    Se puede poner width y height para ajustar el tamaño, así
                    <canvas id="bubble-chart" width="800" height="800"></canvas>
                  -->
                  <canvas id="myChart1" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart2" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart3" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart4" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart5" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart7" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart6" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart8" height="250"></canvas>
                </div>
              </div>
              <div class="col-xl-6 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart9"></canvas>
                </div>
              </div>
              <div class="col-xl-6 col-sm-6 p-2">
                <div class="card card-common p-3 my-auto">
                  <canvas id="myChart10"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!--<section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row mb-5">
              <div class=" col-sm-6 p-2">
                <div class="card card-common">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div class="row mb-5">
              <div class=" col-sm-6 p-2">
                <div class="card card-common">
                  <canvas id="myChart2"></canvas>
                </div>
              </div>
            </div>
    </section>-->

    <!-- end of charts -->

    <!-- tables -->
    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Salarios de la plantilla</h3>
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Salario</th>
                      <th>Fecha</th>
                      <th>Contactar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Juan</td>
                      <td>1550€</td>
                      <td>13/01/2015</td>
                      <td><button type="button" class="btn btn-info btn-sm">Mensaje</button></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Ana</td>
                      <td>2100€</td>
                      <td>04/07/2017</td>
                      <td><button type="button" class="btn btn-info btn-sm">Mensaje</button></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Marco</td>
                      <td>1700€</td>
                      <td>23/09/2019</td>
                      <td><button type="button" class="btn btn-info btn-sm">Mensaje</button></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Maria</td>
                      <td>3650€</td>
                      <td>17/02/2012</td>
                      <td><button type="button" class="btn btn-info btn-sm">Mensaje</button></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>Eduardo</td>
                      <td>2200€</td>
                      <td>29/11/2019</td>
                      <td><button type="button" class="btn btn-info btn-sm">Mensaje</button></td>
                    </tr>
                  </tbody>
                </table>

                <!-- pagination -->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>Anterior</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>Siguiente</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- end of pagination -->

              </div>
              <div class="col-xl-6 col-12">
                <h3 class="text-muted text-center mb-3">Pagos recientes</h3>
                <table class="table table-light table-hover text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Cantidad</th>
                      <th>Fecha</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Monica</td>
                      <td>1080€</td>
                      <td>25/05/2020</td>
                      <td><span class="badge badge-success w-75 py-2">Aprobado</span></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Nicol&aacutes</td>
                      <td>2070€</td>
                      <td>25/05/2020</td>
                      <td><span class="badge badge-success w-75 py-2">Aprobado</span></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Alejandro</td>
                      <td>2400€</td>
                      <td>25/05/2020</td>
                      <td><span class="badge badge-danger w-75 py-2">Pendiente</span></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Jane</td>
                      <td>1800€</td>
                      <td>25/05/2020</td>
                      <td><span class="badge badge-danger w-75 py-2">Pendiente</span></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>David</td>
                      <td>4700€</td>
                      <td>25/05/2020</td>
                      <td><span class="badge badge-success w-75 py-2">Aprobado</span></td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td>Cristina</td>
                      <td>2100€</td>
                      <td>25/05/2020</td>
                      <td><span class="badge badge-danger w-75 py-2">Pendiente</span></td>
                    </tr>
                  </tbody>
                </table>
                 <!-- pagination -->
                 <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>Anterior</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>Siguiente</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- end of pagination -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of tables -->
   
    <!-- progress / task list -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row mb-4 align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <div class="bg-light text-black p-4 rounded">
                  <h4 class="mb-5">Ratios de visitas por navegador</h4>
                  <h6 class="mb-3">Google Chrome</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width: 91%">
                      91%
                    </div>
                  </div>
                  <h6 class="mb-3">Mozilla Firefox</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success" style="width: 82%">
                      82%
                    </div>
                  </div>
                  <h6 class="mb-3">Safari</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger" style="width: 67%">
                      67%
                    </div>
                  </div>
                  <h6 class="mb-3">Internet Explorer</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold bg-info" style="width: 10%">
                      10%
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <h4 class="text-muted p-3 mb-3">Tareas:</h4>
                <div class="container-fluid bg-white">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8">
                      Comprobar que la p&aacutegina web funciona como debe.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8">
                      Hablar con Marcos la posibilidad de expansi&oacuten a Oriente.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8">
                      Comprobar recibos de la compra de ordenadores.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8">
                      Incentivar a la plantilla con el viaje en grupo del que hablamos.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8">
                      Pensar sobre el tema de MadAnalytics, podr&iacutea ser una buena idea.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of progress / task list -->

    <!-- activities / quick post -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center mb-5">
              <div class="col-xl-7">
                <h4 class="text-muted mb-4">Actividades recientes de clientes</h4>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseOne">
                        <img src="images/cust1.jpeg" width="50" class="mr-3 rounded">
                        Juan envi&oacute un nuevo comentario
                      </button>
                    </div>
                    <div class="collapse show" id="collapseOne" data-parent="#accordion">
                      <div class="card-body">
                        Mi nuevo dashboard es la caña, ¡está aumentando mucho mi productividad!
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                        <img src="images/cust2.jpeg" width="50" class="mr-3 rounded">
                        Mark envi&oacute un nuevo comentario
                      </button>
                    </div>
                    <div class="collapse" id="collapseTwo" data-parent="#accordion">
                      <div class="card-body">
                        Voy a recomendaros a la empresa de mi primo, creo que no sabe lo que se está perdiendo :)
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                        <img src="images/cust3.jpeg" width="50" class="mr-3 rounded">
                        Monica envi&oacute un nuevo comentario
                      </button>
                    </div>
                    <div class="collapse" id="collapseThree" data-parent="#accordion">
                      <div class="card-body">
                        Me alegro mucho de haber dado el paso hacia una negocio más organizado, realmente a valido la pena.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                        <img src="images/cust4.jpeg" width="50" class="mr-3 rounded">
                        Vivien envi&oacute un nuevo comentario
                      </button>
                    </div>
                    <div class="collapse" id="collapseFour" data-parent="#accordion">
                      <div class="card-body">
                        Estoy teniendo algunos problemas con la actualización de la base de datos, necesito ayuda lo antes posible.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFive">
                        <img src="images/cust5.jpeg" width="50" class="mr-3 rounded">
                        Nick envi&oacute un nuevo comentario
                      </button>
                    </div>
                    <div class="collapse" id="collapseFive" data-parent="#accordion">
                      <div class="card-body">
                        Cuándo vi el precio pensé: Ni de coña. Cuándo vi lo que podía conseguir dije: quizá valga la pena. Ahora, con mi nuevo Dashboard, se que tomé la decisión correcta, ¡por muy cara que sea vale la pena!
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseSix">
                        <img src="images/cust6.jpeg" width="50" class="mr-3 rounded">
                        Ann envi&oacute un nuevo comentario
                      </button>
                    </div>
                    <div class="collapse" id="collapseSix" data-parent="#accordion">
                      <div class="card-body">
                        Me encanta el aspecto limpio y profesional que tiene la página ~ 10/10.
                      </div>                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 mt-5">
                <div class="card rounded">
                  <div class="card-body">
                    <h5 class="text-muted text-center mb-4">Acceso r&aacutepido</h5>
                    <ul class="list-inline text-center py-3">
                      <li class="list-inline-item mr-4">
                        <a href="#">
                          <i class="fas fa-pencil-alt text-success"></i>
                          <span class="h6 text-muted">Estado</span>
                        </a>
                      </li>
                      <li class="list-inline-item mr-4">
                        <a href="#">
                          <i class="fas fa-camera text-info"></i>
                          <span class="h6 text-muted">Foto</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fas fa-map-marker-alt text-primary"></i>
                          <span class="h6 text-muted">Localizaci&oacute;n</span>
                        </a>
                      </li>
                    </ul>
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control py-2 mb-3" placeholder="En que piensas...">
                        <button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Enviar</button>
                      </div>
                    </form>
                    <div class="row">
                      <div class="col-6">
                        <div class="card bg-light">
                          <i class="far fa-calendar-alt fa-8x text-warning d-block m-auto py-3"></i>
                          <div class="card-body">
                            <p class="card-text text-center font-weight-bold text-uppercase">Lun, mayo 26</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="card bg-light">
                          <i class="far fa-clock fa-8x text-danger d-block m-auto py-3"></i>
                          <div class="card-body">
                            <p class="card-text text-center font-weight-bold text-uppercase">3:50 am</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of activities / quick post -->

    <!-- footer -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row border-top pt-3">
              <div class="col-lg-6 text-center">
                <ul class="list-inline">
                  <li class="list-inline-item mr-4">
                    <a href="#" class="text-dark">CorAnalytics</a>
                  </li>
                  <li class="list-inline-item mr-4">
                    <a href="#" class="text-dark">Saber m&aacutes</a>
                  </li>
                  <li class="list-inline-item mr-4">
                    <a href="#" class="text-dark">Soporte</a>
                  </li>
                  <li class="list-inline-item mr-4">
                    <a href="#" class="text-dark">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6 text-center">
                <p>&copy; 2020 Copyright</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <?php include 'script.php';?>
  </body>
</html>






