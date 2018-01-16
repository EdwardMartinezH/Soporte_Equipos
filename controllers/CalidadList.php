<?php
include_once realpath('../control/CalidadController.php');
include_once realpath('../control/CargoController.php');
$html="<div id='datatable-buttons_wrapper' class='dataTables_wrapper form-inline dt-bootstrap no-footer'>
<!--                                    <div class='dt-buttons btn-group'><a class='btn btn-default buttons-copy buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Copy</span></a><a class='btn btn-default buttons-csv buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>CSV</span></a><a class='btn btn-default buttons-pdf buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>PDF</span></a><a class='btn btn-default buttons-print btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Print</span></a></div><div id='datatable-buttons_filter' class='dataTables_filter'><label>Search:<input type='search' class='form-control input-sm' placeholder='' aria-controls='datatable-buttons'></label></div>-->
                                    
                                    <div id='datatable-buttons_wrapper' class='dataTables_wrapper form-inline dt-bootstrap no-footer'><div class='dt-buttons btn-group'><a class='btn btn-default buttons-copy buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Copy</span></a><a class='btn btn-default buttons-csv buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>CSV</span></a><a class='btn btn-default buttons-pdf buttons-html5 btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>PDF</span></a><a class='btn btn-default buttons-print btn-sm' tabindex='0' aria-controls='datatable-buttons'><span>Print</span></a></div><div id='datatable-buttons_filter' class='dataTables_filter'><label>Search:<input type='search' class='form-control input-sm' placeholder='' aria-controls='datatable-buttons'></label></div><table id='datatable-buttons' class='table table-striped table-bordered dataTable no-footer dtr-inline collapsed' role='grid' aria-describedby='datatable-buttons_info'>
                                    <thead>
                                        <tr role='row'><th class='sorting_asc' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Id: activate to sort column descending' style='width: 11px;' aria-sort='ascending'><h6>Id</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cargo: activate to sort column ascending' style='width: 53px;'><h6>Cargo</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cambio de contraseña: activate to sort column ascending' style='width: 61px;'><h6>Cambio de contraseña</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Bloqueo de Sesion: activate to sort column ascending' style='width: 45px;'><h6>Bloqueo de Sesion</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Bloqueo Automatico: activate to sort column ascending' style='width: 63px;'><h6>Bloqueo Automatico</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Copia de Seguridad: activate to sort column ascending' style='width: 55px;'><h6>Copia de Seguridad</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Antivirus: activate to sort column ascending' style='width: 48px;'><h6>Antivirus</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Programas no Permitidos
                                                : activate to sort column ascending' style='width: 59px;'><h6>Programas no Permitidos
                                                </h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Carpetas Compartidas: activate to sort column ascending' style='width: 70px; display: none;'><h6>Carpetas Compartidas</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Cuenta Administrador: activate to sort column ascending' style='width: 77px; display: none;'><h6>Cuenta Administrador</h6></th><th class='sorting' tabindex='0' aria-controls='datatable-buttons' rowspan='1' colspan='1' aria-label='Observaciones Compartidas: activate to sort column ascending' style='width: 80px; display: none;'><h6>Observaciones Compartidas</h6></th></tr>
                                    </thead>
                                    <tbody>";
$calidad= CalidadController::listAll();    
$cargos= CargoController::listAll();
//se supone que deben tener el mismo número de registros
for($i=0;$i<count($calidad);$i++){
    $cargo=$cargos[$i]->getNombre();
    $idcalidad = $calidad[$i]->getIdcalidad();
    $clave = $calidad[$i]->getClave();
    $bloquea = $calidad[$i]->getBloquea();
    $bloqueu_automatico = $calidad[$i]->getBloqueu_automatico();
    $copia_seguridad = $calidad[$i]->getCopia_seguridad();
    $antivirus = $calidad[$i]->getAntivirus();
    $progra_no_autorizado = $calidad[$i]->getProgra_no_autorizado();
    $comparte_archivos = $calidad[$i]->getComparte_archivos();
    $cuenta_adm = $calidad[$i]->getCuenta_adm();
    $observaciones = $calidad[$i]->getObservaciones();
    
    $html.="<tr role='row' class='odd'>
                                            <td class='sorting_1' tabindex='0'>$idcalidad</td>
                                            <td>$cargo</td>
                                            <td>$clave</td>
                                            <td>$bloquea</td>
                                            <td>$bloqueu_automatico</td>
                                            <td>$copia_seguridad</td>
                                            <td>$antivirus</td>
                                            <td>$progra_no_autorizado</td>
                                            <td>$comparte_archivos</td>
                                            <td>$cuenta_adm</td>
                                            <td>$observaciones</td>
                                        </tr>";
}                                       
        $html.="</tbody>
                                </table><div class='dataTables_info' id='datatable-buttons_info' role='status' aria-live='polite'>Showing 1 to 3 of 3 entries</div><div class='dataTables_paginate paging_simple_numbers' id='datatable-buttons_paginate'><ul class='pagination'><li class='paginate_button previous disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_previous'><a href='#'>Previous</a></li><li class='paginate_button active' aria-controls='datatable-buttons' tabindex='0'><a href='#'>1</a></li><li class='paginate_button next disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_next'><a href='#'>Next</a></li></ul></div></div>
<!--                                    <div class='dataTables_info' id='datatable-buttons_info' role='status' aria-live='polite'>Showing 1 to 10 of 57 entries</div>-->
                                    <div class='dataTables_paginate paging_simple_numbers' id='datatable-buttons_paginate'><ul class='pagination'>
<!--                                            <li class='paginate_button previous disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_previous'><a href='#'>Previous</a></li>-->
<!--                                            <li class='paginate_button active' aria-controls='datatable-buttons' tabindex='0'><a href='#'>1</a></li><li class='paginate_button ' aria-controls='datatable-buttons' tabindex='0'><a href='#'>2</a></li><li class='paginate_button ' aria-controls='datatable-buttons' tabindex='0'><a href='#'>3</a></li><li class='paginate_button ' aria-controls='datatable-buttons' tabindex='0'><a href='#'>4</a></li><li class='paginate_button ' aria-controls='datatable-buttons' tabindex='0'><a href='#'>5</a></li><li class='paginate_button ' aria-controls='datatable-buttons' tabindex='0'><a href='#'>6</a></li>-->
<!--                                            <li class='paginate_button next' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_next'><a href='#'>Next</a></li>-->
                                        </ul></div>
                                .</div>";
echo $html;