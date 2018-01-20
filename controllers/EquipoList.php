<?php
include_once realpath('../control/EquipoController.php');
include_once realpath('../control/PerifericosController.php');
include_once realpath('../control/Tipo_equipoController.php');
$html="<div id='datatable-buttons_wrapper' class='dataTables_wrapper form-inline dt-bootstrap no-footer'><div class='dt-buttons btn-group'><a class='btn btn-default buttons-copy buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Copy</span></a><a class='btn btn-default buttons-csv buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>CSV</span></a><a class='btn btn-default buttons-pdf buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>PDF</span></a><a class='btn btn-default buttons-print btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Print</span></a></div><div id='datatable-buttons_filter' class='dataTables_filter'><label>Search:<input type='search' class='form-control input-sm' placeholder='' aria-controls='datatable-buttons'></label></div><table id='datatable-buttons' class='table table-striped table-bordered dataTable no-footer dtr-inline' role='grid' aria-describedby='datatable-buttons_info'>
                                    <thead>
                                        <tr role='row'><th hidden='true' class='sorting_asc' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' style='width: 65px;' aria-sort='ascending' aria-label='id oculto: activate to sort column descending'>id oculto</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Id: activate to sort column ascending'>Id</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Nombre: activate to sort column ascending'>Tipo de equipo</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cargo: activate to sort column ascending'>Pantalla</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Correo: activate to sort column ascending'>Teclado</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cargo: activate to sort column ascending'>Mouse</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Correo: activate to sort column ascending'>Impresora</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cargo: activate to sort column ascending'>Camara</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Correo: activate to sort column ascending'>Torre</th>
                                        <th  class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='modificar: activate to sort column ascending'>modificar</th>
                                        </tr>
                                    </thead>
                                    <tbody>";                                        
$equipos= EquipoController::listAll();    
for($i=0;$i<count($equipos);$i++){
    $id=$equipos[$i]->getIdEquipo();
    $periferico= PerifericosController::listByEquipo($id);
    $pantalla="No aplica";
    $teclado="No aplica";
    $mouse="No aplica";
    $impresora="No aplica";
    $camara="No aplica";
    $torre="No aplica";
    for($j=0;$j<count($periferico);$j++){
        switch ($periferico[$j]->getTipo_Periferico_id()){
            case 1:{
                $pantalla=$periferico[$j]->getSerial();
                break;
            }
            case 2:{
                $teclado=$periferico[$j]->getSerial();
                break;
            }
            case 3:{
                $mouse=$periferico[$j]->getSerial();
                break;
            }
            case 4:{
                $impresora=$periferico[$j]->getSerial();
                break;
            }
            case 5:{
                $camara=$periferico[$j]->getSerial();
                break;
            }
            case 6:{
                $torre=$periferico[$j]->getSerial();
                break;
            }
        }
    }         
$tipoEquipo= Tipo_equipoController::select($equipos[$i]->getTipo_equipo_id());
$tipoEquipoNombre=$tipoEquipo->getNombre();
                                    $html.="<tr role='row' class='odd'>
                                            <td hidden='true' class='sorting_1' tabindex='0'>Fredy Arciniegas es el puto amo</td>
                                            <td>$id</td>
                                            <td>$tipoEquipoNombre</td>
                                            <td>$pantalla</td>
                                            <td>$teclado</td>
                                            <td>$mouse</td>
                                            <td>$impresora</td>    
                                            <td>$camara</td>
                                            <td>$torre</td>    
                                            <td><button data-toggle='modal' data-target='#modal-solucion' class='btn btn-icon waves-effect waves-light btn-info m-b-5'> <i class='fa fa-keyboard-o' title='Descipción '></i> </button>
                                            <button class='btn btn-icon waves-effect waves-light btn-danger m-b-5'> <i class='fa fa-remove ' title='Eliminar '></i> </button>                                            
                                            </td>
                                        </tr>";
}
   $html.="</tbody>
                                </table><div class='dataTables_info' id='datatable-buttons_info' role='status' aria-live='polite'>Showing 1 to 1 of 1 entries</div><div class='dataTables_paginate paging_simple_numbers' id='datatable-buttons_paginate'><ul class='pagination'><li class='paginate_button previous disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_previous'><a href='#'>Previous</a></li><li class='paginate_button active' aria-controls='datatable-buttons' tabindex='0'><a href='#'>1</a></li><li class='paginate_button next disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_next'><a href='#'>Next</a></li></ul></div></div>";
   echo $html;     
