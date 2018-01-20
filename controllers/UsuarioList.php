<?php
include_once realpath('../control/UsuarioController.php');
include_once realpath('../control/CargoController.php');
$html="";                                     
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
//   $html.="</tbody>
//                                </table><div class='dataTables_info' id='datatable-buttons_info' role='status' aria-live='polite'>Showing 1 to 1 of 1 entries</div><div class='dataTables_paginate paging_simple_numbers' id='datatable-buttons_paginate'><ul class='pagination'><li class='paginate_button previous disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_previous'><a href='#'>Previous</a></li><li class='paginate_button active' aria-controls='datatable-buttons' tabindex='0'><a href='#'>1</a></li><li class='paginate_button next disabled' aria-controls='datatable-buttons' tabindex='0' id='datatable-buttons_next'><a href='#'>Next</a></li></ul></div></div>";
   echo $html;     
