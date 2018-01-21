<?php

include_once realpath('../control/ProblemaController.php');

$problemas = ProblemaController::listAll();
$html = "";  
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
$html.="";
echo $html;


