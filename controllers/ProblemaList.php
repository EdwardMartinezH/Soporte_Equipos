<?php

include_once realpath('../control/ProblemaController.php');

$problemas = ProblemaController::listAll();
$html = '<table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Problema</th>
                                                    <th>Equipo_idEquipo</th>
                                                    <th>fecha_registro</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>';  
for ($i = 0; $i < count($problemas); $i++) {         
        $idProblema = $problemas[$i]->getIdProblema();
        $problema = $problemas[$i]->getProblema();
        $idEquipo = $problemas[$i]->getEquipo_idEquipo();
        $fecha = $problemas[$i]->getFecha_registro();
        $html .= "<tr role=\"row\" class=\"odd\">                 
                  <td>$idProblema</td>
                  <td>$problema</td>
                  <td>$idEquipo</td> 
                  <td>$fecha</td>                  
                 ";    
}
$html.="  </tbody>
                                        </table>               
              ";
echo $html;


