<?php

session_start();
if (!isset($_SESSION['id_usuario']) || $_SESSION['id_usuario'] == null || $_SESSION['id_usuario'] == "") {
    echo'<script type="text/javascript">
                alert("Inicio de Sesion Requerido");
                window.location="login.php"
                </script>';
}
$usuario = $_SESSION['id_usuario'];
$cargo = $_SESSION['cargo_id'];
$nombre = $_SESSION['nombre_usuario'];
//var_dump('nombre'.$nombre.'usuario'.$usuario.'cargo'.$cargo);
//session_destroy();


?>

<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!--<link rel="shortcut icon" href="assets/images/favicon_1.ico">-->
          <link rel="shortcut icon" href="http://pescadero.com.co/_images/logoicon.png">


        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>

 <input type="hidden" id="codID" value="<?php echo $usuario?>" >  
    <body>
        
    <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">

                        
                        <a href="formPrincipal.php" class="logo" alt="Pescadero" title="Pescadero" > <img src="assets/images/logo2.png" alt="Pescadero" title="Pescadero " width='35' height='35'><span>   Pescadero </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                    <label style="color: white" ><?php echo $nombre ?></label>
<!--                                     <a href="#"><i class="fa fa-search"></i></a>-->
                                </form>
                            </li>
                    

                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                                 <li>
                           <!--<a href="formPrincipal.php" ><i class="md md-terrain "></i><span>  Inicio  </span> </a>-->

                            </li>
                            
                            <li>
                                <a ><i class="md md-palette " ></i><span data-toggle="modal" data-target="#con-close-modal"> Registrar Solicitud </span> </a>
                                  <!--<button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>-->
                            </li>
                            
                       
<!--                            data-toggle="modal" data-target="#con-close-modal">Responsive Modal-->

<!--                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Registrar  </span> </a>
                                <ul class="submenu">
                                    <li><a href="FormRegistrarPeriferico.php">Registrar Periferico</a></li>
                                    <li><a href="FormRegistrarEquipo.php">Registrar Equipo</a></li>
                                   
                                </ul>
                            </li>-->

                         


                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                    
             

                </div>
            </div>
        </header>



               <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                <h4 class="modal-title">Registrar Solicitud</h4>
                                            </div>
                                            <form action="../controler/problema/insertar.php" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" name="problema" rows="5"></textarea>                                                                         
                                                        <input type="hidden" name="idUsuario" value="<?php echo $usuario?>" >                                                        
                                                        <input type="hidden" name="cargoUsuario" value="<?php echo $cargo?>" >
                                                        <input type="hidden" name="nombreUsuario" value="<?php echo $nombre?>" >
                                                    </div>                                                  
                                                </div>
                                            </div>                                            
                                            <div class="fileupload btn btn-purple waves-effect waves-light">
                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                    <input type="file" name="imagen" class="upload">
                                    
                                </div>
                                            <br>
                                            <br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit"  class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                                            </div>
                                            </form>
                                        </div>                                    
                                    </div>
                                </div><!-- /.modal -->
        <!-- Navigation Bar-->
  
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
    

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Solicitudes Realizadas</h3>
                            </div>
                            <div class="panel-body">
 
                                <table id="datatable-buttons" class="table table-striped table-bordered">

                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>fecha Problema</th>
                                            <th>Problema</th>
                                            <th>fecha Solucion</th>
                                            <th>Solucion</th>
                                        </tr>
                                    </thead>


                                    <tbody id="pro">
                                       
                                      
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->


       



           




    


   <?php include "footer.php"; ?>  
              
            </div>
            <!-- end container -->

        </div>
        <!-- end wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
            
            
        </script>

        <script type="text/javascript">
           $(document).ready(function(){
                var codID = $('#codID').val();
                $.post("../controler/solucion/listarSolucionAndProblemaByEquipo.php",
                    {
                        cod: codID
                    },
                    function(data, status){
                         $('#pro').html(data);
                    });

             });
       </script> 


    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>