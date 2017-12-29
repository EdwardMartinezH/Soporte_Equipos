    <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="formPrincipal_Adm.php" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="text-center notifi-title">Notification</li>
                                    <li class="list-group">
                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left">
                                                <em class="fa fa-user-plus fa-2x text-info"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New user registered</div>
                                                <p class="m-0">
                                                   <small>You have 10 unread messages</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>
                                       <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left">
                                                <em class="fa fa-diamond fa-2x text-primary"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">New settings</div>
                                                <p class="m-0">
                                                   <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                        <!-- list item-->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left">
                                                <em class="fa fa-bell-o fa-2x text-danger"></em>
                                             </div>
                                             <div class="media-body clearfix">
                                                <div class="media-heading">Updates</div>
                                                <p class="m-0">
                                                   <small>There are
                                                      <span class="text-primary">2</span> new updates available</small>
                                                </p>
                                             </div>
                                          </div>
                                        </a>
                                       <!-- last list item -->
                                        <a href="javascript:void(0);" class="list-group-item">
                                          <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
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
                           <a href="formPrincipal_Adm.php" ><i class="md md-terrain "></i><span>  Inicio  </span> </a>

                            </li>
                            
<!--                            <li>
                                <a ><i class="md md-palette " ></i><span data-toggle="modal" data-target="#con-close-modal"> Registrar Solicitud </span> </a>
                                  <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
                            </li>-->
                            
                       
<!--                            data-toggle="modal" data-target="#con-close-modal">Responsive Modal-->

                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Registrar  </span> </a>
                                <ul class="submenu">
                                    <li><a style="cursor: pointer  " data-toggle="modal" data-target="#con-close-modal">Registrar Solicitud</a></li>
                                    <li><a style="cursor: pointer  " data-toggle="modal" data-target="#modal-mantenimiento">Registrar Mantenimiento</a></li>
                                  
                                   
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span>  Equipos  </span> </a>
                                <ul class="submenu">
                                    <li><a href="FormRegistrarPeriferico.php">Registrar Periferico</a></li>
                                    <li><a href="FormRegistrarEquipo.php">Registrar Equipo</a></li>
                                    <li><a href="periferico_listar.php">Listar Periferico</a></li>
                                    <li><a href="equipo_listar.php">Listar Equipo</a></li>
                                   
                                </ul>
                            </li>

                            
                            <li class="has-submenu">
                                <a href="personal_listar.php"><i class="md md-palette "></i><span> Personal </span> </a>
<!--                                <ul class="submenu">
                                    <li><a href="periferico_listar.php">Mostrar Pendientes</a></li>
                                    <li><a href="FormRegistrarEquipo.php">Mostrar Todas las Solicitudes</a></li>
                                   
                                </ul>-->
                            </li>

                         
                             <li>
                                 <a href="calidad_listar.php" ><i class="md md-terrain "></i><span>  Calidad  </span> </a>

                            </li>


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
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Registrar Solicitud</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                         <textarea class="form-control" rows="5"></textarea>
                                                                         
                                                    </div>
                                                  
                                                </div>
                                         
                                               
                                       
                                            </div>
                                            
                                            <div class="fileupload btn btn-purple waves-effect waves-light">
                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                    <input type="file" class="upload">
                                </div>
                                            <br>
                                            <br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->

                                
          <div id="modal-mantenimiento" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Registrar Mantenimiento</h4>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">Equipo</label>
                                                               <select required class="form-control" id="field-3">
                                                        <option value="">Seleccione</option>
                                                        <option value="1">Comercial</option>
                                                        <option value="2">Servidor</option>
                                                        <option value="3">Despachos</option>
                                                      
                                                    </select>
                                                        </div>
                                                    </div>
                                     
                                                 <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="field-3" class="control-label">fecha</label>
                                                            <input type="date" class="form-control" id="field-3" placeholder="Address">
                                                        </div>
                                                    </div>
                                            
                                            
                                   <div class="col-md-12">
                                                        <div class="form-group no-margin">
                                                            <label for="field-7" class="control-label">Observacion</label>
                                                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px">                                                        </textarea>
                                                        </div>
                                                    </div>
                              
                                            <hr>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info waves-effect waves-light">Registrar Solicitud</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.modal -->