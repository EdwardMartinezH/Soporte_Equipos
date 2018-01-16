<?php
include_once realpath('../control/UsuarioController.php');
include_once realpath('../control/CargoController.php');
$html="<div id='datatable-buttons_wrapper' class='dataTables_wrapper form-inline dt-bootstrap no-footer'><div class='dt-buttons btn-group'><a class='btn btn-default buttons-copy buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Copy</span></a><a class='btn btn-default buttons-csv buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>CSV</span></a><a class='btn btn-default buttons-pdf buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>PDF</span></a><a class='btn btn-default buttons-print btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Print</span></a></div><div id='datatable-buttons_filter' class='dataTables_filter'><label>Search:<input type='search' class='form-control input-sm' placeholder='' aria-controls='datatable-buttons'></label></div><table id='datatable-buttons' class='table table-striped table-bordered dataTable no-footer dtr-inline' role='grid' aria-describedby='datatable-buttons_info'>
                                    <thead>
                                        <tr role='row'><th hidden='true' class='sorting_asc' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' style='width: 65px;' aria-sort='ascending' aria-label='id oculto: activate to sort column descending'>id oculto</th><th style='width: 220px;' class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Id: activate to sort column ascending'>Id</th><th style='width: 208px;' class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Nombre: activate to sort column ascending'>Nombre</th><th style='width: 167px;' class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cargo: activate to sort column ascending'>Cargo</th><th style='width: 184px;' class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Correo: activate to sort column ascending'>Correo</th><th style='width: 234px;' class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='modificar: activate to sort column ascending'>modificar</th></tr>
                                    </thead>
                                    <tbody>";                                        
$usuarios= UsuarioController::listAll();                                     
for($i=0;$i<count($usuarios);$i++){
    $id=$usuarios[$i]->getId();    
$nombre=$usuarios[$i]->getNombre();
$correo=$usuarios[$i]->getCorreo();
$cargo= CargoController::select($usuarios[$i]->getCargo_id());
$cargoNombre=$cargo->getNombre();
                                    $html.="<tr role='row' class='odd'>
                                            <td hidden='true' class='sorting_1' tabindex='0'>Tiger Nixon</td>
                                            <td>$id</td>
                                            <td>$nombre</td>
                                            <td>$cargoNombre</td>
                                            <td>$correo</td>
                                            <td><button data-toggle='modal' data-target='#modal-solucion' class='btn btn-icon waves-effect waves-light btn-info m-b-5'> <i class='fa fa-keyboard-o' title='Descipción '></i> </button>
                                            <button class='btn btn-icon waves-effect waves-light btn-danger m-b-5'> <i class='fa fa-remove ' title='Eliminar '></i> </button>                                            
                                            </td>
                                        </tr>";
}
   $html.="</tbody>
                                </table><div class='dataTables_info' id='datatable-buttons_info' role='status' aria-live='polite'>Showing 1 to 1 of 1 entries</div><div class='dataTables_paginate paging_simple_numbers' id='datatable-buttons_paginate'><ul class='pagination'><li class='paginate_button previous disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_previous'><a href='#'>Previous</a></li><li class='paginate_button active' aria-controls='datatable-buttons' tabindex='0'><a href='#'>1</a></li><li class='paginate_button next disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_next'><a href='#'>Next</a></li></ul></div></div>";
   echo $html;     
