<?php
    include_once '../../dao/SolucionDao.php';
    include_once '../../dto/Problema.php';
    include_once '../../dto/Solucion.php';
    
  	$cod = filter_input(INPUT_POST, 'cod');
    //var_dump($cod);

    $solucionDao = new SolucionDao();
    
   $set = $solucionDao->listarSolucionAndProblemaByEquipo($cod);
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
                </tr>";
        $html .= $html2;
    }
      $html2 = "<tr>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>";
        $html .= $html2;
   }
    
  


     
	echo $html;