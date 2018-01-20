<?php

include_once realpath('../control/ProblemaController.php');
include_once realpath('../control/EquipoController.php');

$ex="";
//-----------------------------------------------------
            $cargo=filter_input(INPUT_POST,'cargoUsuario');
            $nombreUsuario=filter_input(INPUT_POST,'nombreUsuario');
            $idUsuario=filter_input(INPUT_POST,'idUsuario');
//---------------------------------------------------------
            
            
            $equipo= EquipoController::selectByUsuario($idUsuario);
            if($equipo!=null && $equipo->getIdEquipo()!=null){                            
            try{                                                   
            $descproblema=(filter_input(INPUT_POST,'problema'));                        
            ProblemaController::insert("", $descproblema, $equipo->getIdEquipo(),"");                        
            $img=filter_input(INPUT_POST,'imagen');
            //ENVIAR ESO AL CORREO
            }catch(Exception $e){
               $ex='alert("Algo ha fallado al registrar la solicitud");';
            }            
            }else{
                $ex='alert("Usted no posee un equipo asociado");';
            }
            
            
//---------------------------------------------------------            
            if($cargo == null){
                echo '<script language="javascript">'.$ex.' window.location="../vista/login.php"</script>';      
                       
               
            }else{                              
     if($cargo=="2"||$cargo=="3"){//tipo director 1
         $_SESSION['cargo_id']= $cargo; 
         $_SESSION['id_usuario'] = $idUsuario;
         $_SESSION['nombre_usuario'] = $nombreUsuario;

//         var_dump($cargo.$idUsuario. $nombreUsuario);
          echo '<script language="javascript">'.$ex.'window.location="../vista/formPrincipal_gerencia.php"</script>';

     }     
     if($cargo=="29"){//tipo director 1
         $_SESSION['cargo_id']= $cargo; 
         $_SESSION['id_usuario'] = $idUsuario;
         $_SESSION['nombre'] = $nombreUsuario;

           
          echo '<script language="javascript">'.$ex.'window.location="../vista/formPrincipal_Adm.php"</script>';
          
     } 
     else {         
         $_SESSION['cargo_id']= $cargo; 
         $_SESSION['id_usuario'] = $idUsuario;
         $_SESSION['nombre_usuario'] = $nombreUsuario;
           
//            var_dump($cargo.$idUsuario. $nombreUsuario);
           echo '<script language="javascript">'.$ex.'window.location="../vista/formPrincipal.php"</script>';
     }
            }
