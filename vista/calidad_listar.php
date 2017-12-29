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


    <body>

        <!-- Navigation Bar-->
       <?php include "header_Adm.php"; ?>  
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">


<div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Buttons example</h3>
                            </div>
                            <div class="panel-body">

                                <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<!--                                    <div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>CSV</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable-buttons"><span>Print</span></a></div><div id="datatable-buttons_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-buttons"></label></div>-->
                                    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 8px;"><h6>Id</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20px;"><h6>Cargo</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20px;"><h6>Cambio de contraseña</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 20px;"><h6>Bloqueo de Sesion</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 20px;"><h6>Bloqueo Automatico</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 20px;"><h6>Copia de Seguridad</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 101px;"><h6>Antivirus</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 20px;"><h6>Programas no Permitidos
                                                </h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20px;"><h6>Carpetas Compartidas</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20px;"><h6>Cuenta Administrador</h6></th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 20px;"><h6>Observaciones Compartidas</h6></th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        
                                        
               
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">1</td>
                                            <td>Accountant humano</td>
                                            <td>Accountant humano</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>$162,700</td>
                                        </tr>
                                    <tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">2</td>
                                            <td>Accountant humano</td>
                                            <td>Accounno</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>$162,700</td>
                                        </tr>
                                    <tr role="row" class="odd">
                                            <td class="sorting_1" tabindex="0">3</td>
                                            <td>Accountant ho</td>
                                            <td>Accountant humano</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>$162,700</td>
                                        </tr>
                                       </tbody>
                                </table>
<!--                                    <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>-->
                                    <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate"><ul class="pagination">
<!--                                            <li class="paginate_button previous disabled" aria-controls="datatable-buttons" tabindex="0" id="datatable-buttons_previous"><a href="#">Previous</a></li>-->
<!--                                            <li class="paginate_button active" aria-controls="datatable-buttons" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="datatable-buttons" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="datatable-buttons" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="datatable-buttons" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="datatable-buttons" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="datatable-buttons" tabindex="0"><a href="#">6</a></li>-->
<!--                                            <li class="paginate_button next" aria-controls="datatable-buttons" tabindex="0" id="datatable-buttons_next"><a href="#">Next</a></li>-->
                                        </ul></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>






           




    


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


    </body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>