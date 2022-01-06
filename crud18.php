<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="Ricardo Maldonado López" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>CRUD CFE</title>

        <!--Morris Chart CSS -->
		    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

       



    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>CFE<i class="md md-album"></i>Tlaxcala</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="ion-navicon"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                        
                           
                                           <!-- list item-->
                                           

                            
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                        </li>
                                    </ul>
                                </li>
                             
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navegación</li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect active"><i class="ti-home"></i> <span> Inicio </span> </a>
                                <ul class="list-unstyled">
                                <li><a href="index.php">Inicio</a></li>
                                </ul>
                            </li>

                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>Fusibles</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="crud.php">Santa Ana Chiautempan</a></li>
                                    <li><a href="crud1.php">Apizaco</a></li>
                                    <li><a href="crud2.php">Atlihuetzia 5240 - 5250- 5260</a></li>
                                    <li><a href="crud3.php">Atlihuetzia 5220</a></li>
                                    <li><a href="crud4.php">Atlihuetzia 5230</a></li>
                                    <li><a href="crud5.php">Altzayanca</a></li>
                                    <li><a href="crud6.php">Cacaxtla</a></li>
                                    <li><a href="crud7.php">Chignahuapan</a></li>
                                    <li><a href="crud8.php">Contla</a></li>
                                    <li><a href="crud9.php">Calpulalpan</a></li>
                                    <li><a href="crud10.php">Cuauhtemoc</a></li>
                                    <li><a href="crud11.php">Huamantla</a></li>
                                    <li><a href="crud12.php">Hueyotlipan</a></li>
                                    <li><a href="crud13.php">Panotla</a></li>
                                    <li><a href="crud14.php">Papalotla</a></li>
                                    <li><a href="crud15.php">Resurrección</a></li>
                                    <li><a href="crud16.php">Santa Anita 4510 - 4520 - 4540</a></li>
                                    <li><a href="crud17.php">Santa Anita 4530 - 4550</a></li>
                                    <li><a href="crud18.php">Xicohtencatl</a></li>
                                    <li><a href="crud19.php">Xalostoc</a></li>
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>OPG's</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">OPG's Tlaxcala</a></li>
                                    <li><a href="">OPG's Apizaco</a></li>
                                    <li><a href="">OPG's Calpulalpan</a></li>
                                    <li><a href="">OPG's Chignahuapan</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ti-menu-alt"></i><span>COP</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">COP Tlaxcala</a></li>
                                    <li><a href="">COP Apizaco</a></li>
                                    <li><a href="">COP Calpulalpan</a></li>
                                    <li><a href="">COP Chignahuapan</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Subestación: XIT - Xicohtencatl</h4>
                                <p class="text-muted page-title-alt">Comisión Federal de Electricidad - División Centro Oriente - Zona Tlaxcala</p>
                            </div>
                        </div>












                            <!-- Pagina - Inicio -->




                            <!-- Pagina - Inicio -->


                            <!-- Pagina - Inicio -->
                            <?php include("db.php")?>

<?php include("includes/header.php")?>

<div class="container p-4">

<div class="col-md-4">
<?php if (isset($_SESSION['message'])) { ?>
  <div class="alert  alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>


    <dic class="card card-body">
    <form action="save_task.php" method="POST">
            <div class="form-group">
                <input type="text" name="Circuito" class="form-control"
                placeholder="Ingrese El Circuito Correspondiente" autofocus>
            </div>

            <div class="form-group">
                <textarea name="Direccion de Tramo" rows="2" class="form-control" 
                placeholder="Ingrese la Direccion de Tramo"></textarea>
            </div>

            <div class="form-group">
                <input type="text" name="Usuarios" class="form-control"
                placeholder="Ingrese Los Usuarios" autofocus>
            </div>

            <div class="form-group">
                <input type="text" name="Demanda kW" class="form-control"
                placeholder="Ingresa La Demanda De kW" autofocus>
            </div>

            <div class="form-group">
                <input type="text" name="Fases" class="form-control"
                placeholder="Ingrese Las Fases" autofocus>
            </div>

            <div class="form-group">
                <textarea name="Tipo Equipo" rows="2" class="form-control" 
                placeholder="Ingrese El Tipo De Equipo"></textarea>
            </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guarda la tarea">
        </form>




      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
          <th>Circuito</th>
            <th>Seleccionamiento Inicial</th>
            <th>Direccion de Tramo</th>
            <th>Usuarios</th>
            <th>Demanda De kW</th>
            <th>Fases</th>
            <th>Tipo Equipo</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $query = "SELECT * FROM  subestacion_xit_xicohtencatl_todos_los_circuitos";
          $row = mysqli_query($conn, $query); { ?>
            <?php foreach($row as $valor): ?>
                <tr>
            <td><?php echo $valor['Circuito'];?></td>
              <td><?php echo $valor['Seleccionamiento Inicial xit']; ?></td>
              <td><?php echo $valor['Direccion_del_Tramo']; ?></td>
              <td><?php echo $valor['Usuarios']; ?></td>
              <td><?php echo $valor['Demanda kW']; ?></td>
              <td><?php echo $valor['Fases']; ?></td>
              <td><?php echo $valor['Tipo_Equipo']; ?></td>
              <td>
                <a href="edit.php?Seleccionamiento Inicial xit=<?php echo $valor['Seleccionamiento Inicial xit']?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="delete_task.php?Seleccionamiento Inicial xit=<?php echo $valor['Seleccionamiento Inicial xit']?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
              </tr>
              <?php endforeach;  ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>   





</form>

<?php include("includes/footer.php")?>


                            <!-- Pagina - Final -->


                            <!-- Pagina - Final -->


                             <!-- Pagina - Final -->









                        
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2021 © CRUD - CFE - Ricardo Maldonado López.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="assets/pages/jquery.dashboard.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>