<?php

include_once realpath('../control/SolucionController.php');

//-----------------------------------------------------
            $cargo=filter_input(INPUT_POST,'cargoUsuario');
            $nombreUsuario=filter_input(INPUT_POST,'nombreUsuario');
            $idUsuario=filter_input(INPUT_POST,'idUsuario');
//---------------------------------------------------------
                        
$problema_idProblema=(filter_input(INPUT_POST,'idProblema'));            
$periféricos_idPeriféricos=(filter_input(INPUT_POST,'idPeriferico'));
$software_idSoftware=(filter_input(INPUT_POST,'idSoftware'));
$torre_idTorre=(filter_input(INPUT_POST,'idTorre'));
$solucion=(filter_input(INPUT_POST,'solucion'));

SolucionController::insert("", $problema_idProblema, $periféricos_idPeriféricos, $software_idSoftware, $torre_idTorre, "", $solucion);

//---------------------------------------------------------            
            if($cargo == null){
                echo '<script language="javascript">'.$ex.' window.location="../../vista/login.php"</script>';      
                       
               
            }else{
              
                //var_dump($result);
     if($cargo=="2"||$cargo=="3"){//tipo director 1
         $_SESSION['cargo_id']= $cargo; 
         $_SESSION['id_usuario'] = $idUsuario;
         $_SESSION['nombre_usuario'] = $nombreUsuario;

//         var_dump($cargo.$idUsuario. $nombreUsuario);
          echo '<script language="javascript">'.$ex.'window.location="../../vista/formPrincipal_gerencia.php"</script>';

     }
//     if($cargo==2||$usuario->getCargo_id()==3){//tipo director 1
//           $_SESSION['basededatos'] = $usuario->getCargo_id();
//          echo '<script language="javascript">alert("'.$usuario->getCargo_id().'");window.location="../../vista/formPrincipal_gerencia.php"</script>';
//          
//     }
     
     if($cargo=="29"){//tipo director 1
         $_SESSION['cargo_id']= $cargo; 
         $_SESSION['id_usuario'] = $idUsuario;
         $_SESSION['nombre'] = $nombreUsuario;

           
          echo '<script language="javascript">'.$ex.'window.location="../../vista/formPrincipal_Adm.php"</script>';
          
     } 
     else {         
         $_SESSION['cargo_id']= $cargo; 
         $_SESSION['id_usuario'] = $idUsuario;
         $_SESSION['nombre_usuario'] = $nombreUsuario;
           
//            var_dump($cargo.$idUsuario. $nombreUsuario);
           echo '<script language="javascript">'.$ex.'window.location="../../vista/formPrincipal.php"</script>';
     }
            }
            