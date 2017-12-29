<?php
    include_once '../../dao/SolucionDao.php';
    include_once '../../dto/Problema.php';
    include_once '../../dto/Solucion.php';
    
  	$cod = filter_input(INPUT_POST, 'cod');
    //var_dump($cod);

    $solucionDao = new SolucionDao();
    
   $set = $solucionDao->listarSolucionAndProblemaByEquipoTodas();
//   var_dump($set);
   $html = "";
   if(isset($set)){
         for ($i=0; $i < count($set); $i++) {
    	$id = $i + 1; 
    	$problema = $set[$i][0];
    	$fp = $problema->getFechaRegistro();
    	$p = $problema->getProblema();
    	$solucion = $set[$i][1];
    	$fs = $solucion->getFechaSolucion();
    	$s = $solucion->getSolucion();
    	$html2 = "<tr>
                    <td>$i</td>
                    <td>$fp</td>
                    <td>$p</td>
                    <td>$fs</td>
                    <td>$s</td>
                     <td>< button data-toggle=\"modal\" data-target=\"#modal-solucion\" class=\"btn btn-icon waves-effect waves-light btn-info m-b-5\"> <i class=\"fa fa-keyboard-o\" title=\"Descipción\"></i> </button>
                                            <button class=\"btn btn-icon waves-effect waves-light btn-danger m-b-5\"> <i class=\"fa fa-remove \" title=\"Eliminar\"></i> </button>
                                            
                    </td>    
                </tr>";
        $html .= $html2;
    }
      $html2 = "<tr>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td><button data-toggle=\"modal\" data-target=\"#modal-solucion\" class=\"btn btn-icon waves-effect waves-light btn-info m-b-5\"> <i class=\"fa fa-keyboard-o\" title=\"Descipción\"></i> </button>
                                            <button class=\"btn btn-icon waves-effect waves-light btn-danger m-b-5\"> <i class=\"fa fa-remove \" title=\"Eliminar\"></i> </button>
                                            
                    </td>
                </tr>";
        $html .= $html2;
   }
    
  


     
	echo $html;