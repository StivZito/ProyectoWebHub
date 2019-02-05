<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ConfiKing - Dashboard</title>
<link rel="icon" type="image/png" href="assets/images/logo.png">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Files -->
<link href="assets/scss/bootstrap.min.css" rel="stylesheet" />
<link href="assets/scss/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="assets/demo/demo.css" rel="stylesheet" />

<body class="">
	<div class="wrapper ">
    	<div class="sidebar" data-color="white" data-active-color="danger">
	      <div class="logo">
	        <a href="homepage.php" class="simple-text logo-mini"><div class="logo-image-small"><img src="assets/images/logo.png"></div></a>
	        <a href="homepage.php" class="simple-text logo-normal">DASHBOARD</a>
	      </div>
		  <div class="sidebar-wrapper">
			<div class="user">
				<div class="photo"><img src="assets/images/logo-small.png"></div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" class="collapsed"><span>Administrador</span></a>
				</div>
			</div>

			<ul class="nav">
				<li class="active">
					<a href="">
						<i class="nc-icon nc-bank"></i>
						<p>Panel Principal</p>
					</a>
				</li>

				<li>
					<a data-toggle="collapse" href="#componentsExamples">
						<i class="nc-icon nc-chart-bar-32"></i>
						<p>Estadisticos<b class="caret"></b></p>
					</a>
					<div class="collapse " id="componentsExamples">
						<ul class="nav">
							<li>
							  <a href="../examples/components/buttons.html">
							    <span class="sidebar-mini-icon">C</span>
							    <span class="sidebar-normal"> Clientes </span>
							  </a>
							</li>
							<li>
							  <a href="../examples/components/grid.html">
							    <span class="sidebar-mini-icon">V</span>
							    <span class="sidebar-normal">Vendedores </span>
							  </a>
							</li>
							<li>
							  <a href="../examples/components/panels.html">
							    <span class="sidebar-mini-icon">Z</span>
							    <span class="sidebar-normal"> Zonas </span>
							  </a>
							</li>
							<li>
							  <a href="../examples/components/sweet-alert.html">
							    <span class="sidebar-mini-icon">P</span>
							    <span class="sidebar-normal"> Productos  </span>
							  </a>
							</li>			
						</ul>
					</div>
				</li>
			</ul>
          </div>
    	</div>


    <div class="main-panel">
	      <!-- Navbar -->
	      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
	        <div class="container-fluid">
	          <div class="navbar-wrapper">
	            <div class="navbar-minimize">
	              <button id="minimizeSidebar" class="btn btn-icon btn-round">
	                <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
	                <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
	              </button>
	            </div>
	            <div class="navbar-toggle">
	              <button type="button" class="navbar-toggler">
	                <span class="navbar-toggler-bar bar1"></span>
	                <span class="navbar-toggler-bar bar2"></span>
	                <span class="navbar-toggler-bar bar3"></span>
	              </button>
	            </div>
	            <a class="navbar-brand" href="homepage.php">Confiking</a>
	          </div>
	          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-bar navbar-kebab"></span>
	            <span class="navbar-toggler-bar navbar-kebab"></span>
	            <span class="navbar-toggler-bar navbar-kebab"></span>
	          </button>
	        </div>
	      </nav>
      	<!-- End Navbar -->
      
  	 <!-- para los datos de cabecera -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Doc. Emitidos</p>
                      <p class="card-title">18
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
                </div>
              </div>
            </div>            
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Ingresos</p>
                      <p class="card-title">$1,540.00
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Today
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Nota Credito</p>
                      <p class="card-title">5
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i> In the day
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Clientes Nuevos</p>
                      <p class="card-title">10
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update now
                </div>
              </div>
            </div>
          </div>
        </div>
       
		<!-- para los datos de en medio -->
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="numbers pull-left">
                      $34,657
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="pull-right">
                      <span class="badge badge-pill badge-success">
                        +18%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="big-title">Total ganado en los ultimos diez meses</h6>
                <canvas id="activeUsers" width="826" height="380"></canvas>
              </div>
              <div class="card-footer">
                <hr>
                <div class="row">
                  <div class="col-sm-7">
                    <div class="footer-title">Ver mas detalles</div>
                  </div>
                  <div class="col-sm-5">
                    <div class="pull-right">
                      <button class="btn btn-success btn-round btn-icon btn-sm">
                        <i class="nc-icon nc-simple-add"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
          </div>


          <div class="col-lg-4 col-sm-6">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="numbers pull-left">
                      169
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="pull-right">
                      <span class="badge badge-pill badge-danger">
                        -14%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="big-title">total clientes en la ultima semana</h6>
                <canvas id="emailsCampaignChart" width="826" height="380"></canvas>
              </div>
              <div class="card-footer">
                <hr>
                <div class="row">
                  <div class="col-sm-7">
                    <div class="footer-title">Ver todos los clientes</div>
                  </div>
                  <div class="col-sm-5">
                    <div class="pull-right">
                      <button class="btn btn-danger btn-round btn-icon btn-sm">
                        <i class="nc-icon nc-button-play"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-sm-6">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="numbers pull-left">
                      8,960
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="pull-right">
                      <span class="badge badge-pill badge-warning">
                        ~51%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="big-title">total unidades vendidas en el año</h6>
                <canvas id="activeCountries" width="826" height="380"></canvas>
              </div>
              <div class="card-footer">
                <hr>
                <div class="row">
                  <div class="col-sm-7">
                    <div class="footer-title">Ver mas detalles</div>
                  </div>
                  <div class="col-sm-5">
                    <div class="pull-right">
                      <button class="btn btn-warning btn-round btn-icon btn-sm">
                        <i class="nc-icon nc-alert-circle-i"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--- para los terceros datos -->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Top Ventas por Zonas</h4>
                <p class="card-category">Distribucion geografica</p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="assets/images/flags/DE.png">
                              </div>
                            </td>
                            <td>Guayaquil</td>
                            <td class="text-right">
                              2.920
                            </td>
                            <td class="text-right">
                              53.23%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="assets/images/flags/DE.png">
                              </div>
                            </td>
                            <td>Machala</td>
                            <td class="text-right">
                              1.300
                            </td>
                            <td class="text-right">
                              20.43%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="assets/images/flags/DE.png">
                              </div>
                            </td>
                            <td>Portoviejo</td>
                            <td class="text-right">
                              760
                            </td>
                            <td class="text-right">
                              10.35%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="assets/images/flags/DE.png">
                              </div>
                            </td>
                            <td>Loja</td>
                            <td class="text-right">
                              690
                            </td>
                            <td class="text-right">
                              7.87%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="assets/images/flags/DE.png">
                              </div>
                            </td>
                            <td>Quito</td>
                            <td class="text-right">
                              600
                            </td>
                            <td class="text-right">
                              5.94%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="assets/images/flags/DE.png">
                              </div>
                            </td>
                            <td>Manabi</td>
                            <td class="text-right">
                              550
                            </td>
                            <td class="text-right">
                              4.34%
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6 ml-auto mr-auto">
                    <div id="worldMap" style="height: 300px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
            <div class="card ">
              <div class="card-header ">
                <h4 class="card-title">Ventas 2018</h4>
                <p class="card-category">Todos los productos incluyen IVA</p>
              </div>
              <div class="card-body ">
                <canvas id="chartActivity"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-info"></i> Matty Jelly
                  <i class="fa fa-circle text-danger"></i> Sorbete Loco
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-check"></i>Ver mas detalles
                </div>
              </div>
            </div>
          </div>

        
        <div class="row">
          <div class="col-md-3">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Estadisticas de Email </h5>
                <p class="card-category">Rendimiento de ultima campaña</p>
              </div>
              <div class="card-body ">
                <canvas id="chartDonut1" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-info"></i> Open
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Numero de emails enviados
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Nuevos Visitantes</h5>
                <p class="card-category">Out Of Total Number</p>
              </div>
              <div class="card-body ">
                <canvas id="chartDonut2" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-warning"></i> Visitan 
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-check"></i> Campaña lanzada 2 dias atras 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Proformas</h5>
                <p class="card-category">Total proformado</p>
              </div>
              <div class="card-body ">
                <canvas id="chartDonut3" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-danger"></i> Completed
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i> Actualizado hace 3 minutos
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Subscripciones</h5>
                <p class="card-category">De nuestros clientes</p>
              </div>
              <div class="card-body ">
                <canvas id="chartDonut4" class="ct-chart ct-perfect-fourth" width="456" height="300"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-secondary"></i> Terminado
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Todos los usuarios
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by 3ChifladosTeam
              </span>
            </div>
          </div>
        </div>
      </footer>
    
  
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<script src="assets/js/plugins/moment.min.js"></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="assets/js/plugins/bootstrap-switch.js"></script>
	<!--  Plugin for Sweet Alert -->
	<script src="assets/js/plugins/sweetalert2.min.js"></script>
	<!-- Forms Validations Plugin -->
	<script src="assets/js/plugins/jquery.validate.min.js"></script>
	<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
	<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
	<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script src="assets/js/plugins/bootstrap-datetimepicker.js"></script>
	<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
	<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
	<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
	<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
	<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
	<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
	<script src="assets/js/plugins/fullcalendar.min.js"></script>
	<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
	<script src="assets/js/plugins/jquery-jvectormap.js"></script>
	<!--  Plugin for the Bootstrap Table -->
	<script src="assets/js/plugins/nouislider.min.js"></script>
	<!-- Chart JS -->
	<script src="assets/js/plugins/chartjs.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/demo/demo.js"></script>
	<script>
		$(document).ready(function() {
		// Javascript method's body can be found in assets/js/demos.js
		demo.initDashboardPageCharts();


		demo.initVectorMap();

		});
	</script>
	
</html>