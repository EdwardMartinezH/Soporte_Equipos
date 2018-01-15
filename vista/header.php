  <?php

session_start();
if (!isset($_SESSION['id_usuario']) || $_SESSION['id_usuario'] == null || $_SESSION['id_usuario'] == "") {
    echo'<script type="text/javascript">
                alert("Inicio de Sesion Requerido");
                window.location="login.php"
                </script>';
}
//session_destroy();
$usuario = $_SESSION['id_usuario'];
$cargo = $_SESSION['cargo_id'];
$nombre = $_SESSION['nombre_usuario'];
$correo = $_SESSION['Correo'];


//   window.location="login.php"
?>


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
                                  
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                   
                             <li><a href="../index.php"><i class="md md-settings-power"></i> Logout</a></li>
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