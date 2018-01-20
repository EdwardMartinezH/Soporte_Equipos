<!DOCTYPE html>
<html>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:42 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

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

        <!-- Plugins css-->
        <link href="assets/plugins/tagsinput/jquery.tagsinput.css" rel="stylesheet">
        <link href="assets/plugins/toggles/toggles.css" rel="stylesheet">
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/colorpicker/colorpicker.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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

                <!-- Page-Title -->

                <!--     <div class="row">
                                    <div class="col-sm-12">
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <h4 class="page-title">Datatable </h4>
                                    </div>
                                </div>-->



                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Registrar Equiposss</h3></div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" method="post" action="../controllers/EquipoInsert.php">   


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Empleado</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" id="empleados" name="empleado">

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tipo de Equipo</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" name="equipo">
                                                <option value="">Seleccione</option>
                                                <option value="1">Portatil</option>
                                                <option value="2">Todo en Uno</option>
                                                <option value="3">Pc Escritorio</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Listar Tipo Pantalla</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" name="tipoPantalla">
                                                <option value="">Seleccione</option>
                                                <option value="1">Lcd</option>
                                                <option value="2">Plasma</option>
                                                <option value="3">Led</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Listar Pantallas</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" id="pantallas" name="pantalla">                                                                                                           

                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Listar Teclado</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" id="teclados" name="teclados">                                                     
                                                <option value="2">Plasma</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Listar Mouse</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" id="mouses" name="raton">
                                                <option value="2">Plasma</option>                                           
                                            </select>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Listar Impresora</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" id="impresoras" name="impresora">

                                            </select>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Listar Camara</label>
                                        <div class="col-sm-10">
                                            <select required class="form-control" id="camaras" name="camara">
                                                <option value="2">Plasma</option>

                                            </select>

                                        </div>
                                    </div>







                                    <div class="form-group">                                    
                                        <div class="col-sm-12" align="center">
                                            <input type="submit"  value="registrar" name="btnMostrar" class="btn btn-info" >
                                        </div>
                                    </div>       







                                </form>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->
                </div> <!-- End row -->













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

        <!-- App js -->
        <script src="assets/js/jquery.app.js"></script>

        <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>

        <script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="assets/plugins/toggles/toggles.min.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/plugins/colorpicker/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

        <script>
            jQuery(document).ready(function () {

                // Tags Input
                jQuery('#tags').tagsInput({width: 'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();


                //multiselect start

                $('#my_multi_select1').multiSelect();
                $('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                                $selectableSearch = that.$selectableUl.prev(),
                                $selectionSearch = that.$selectionUl.prev(),
                                selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                                selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                                .on('keydown', function (e) {
                                    if (e.which === 40) {
                                        that.$selectableUl.focus();
                                        return false;
                                    }
                                });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                                .on('keydown', function (e) {
                                    if (e.which == 40) {
                                        that.$selectionUl.focus();
                                        return false;
                                    }
                                });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });



                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });

                //Bootstrap-TouchSpin
                $(".vertical-spin").TouchSpin({
                    verticalbuttons: true,
                    verticalupclass: 'ion-plus-round',
                    verticaldownclass: 'ion-minus-round'
                });
                var vspinTrue = $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }

                $("input[name='demo1']").TouchSpin({
                    min: 0,
                    max: 100,
                    step: 0.1,
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: '%'
                });
                $("input[name='demo2']").TouchSpin({
                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
                    prefix: '$'
                });
                $("input[name='demo3']").TouchSpin();
                $("input[name='demo3_21']").TouchSpin({
                    initval: 40
                });
                $("input[name='demo3_22']").TouchSpin({
                    initval: 40
                });

                $("input[name='demo0']").TouchSpin({});
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                $.ajax({
                    type: 'post',
                    url: '../controllers/CargoList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#empleados').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/PantallaList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#pantallas').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });


                $.ajax({
                    type: 'post',
                    url: '../controllers/TecladosFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#teclados').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/MouseFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#mouses').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/ImpresorasFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#impresoras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/ImpresorasFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#impresoras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

                $.ajax({
                    type: 'post',
                    url: '../controllers/CamarasFreeList.php'
                })
                        .done(function (listas_rep) {
                            // alert(listas_rep);
                            $('#camaras').html(listas_rep);
                        })
                        .fail(function () {
                            alert('Hubo un errror al cargar las listas_rep')
                        });

            });



        </script>

    </body>

    <!-- Mirrored from moltran.coderthemes.com/menu_2/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2017 05:07:58 GMT -->
</html>