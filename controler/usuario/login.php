  

        <?php       
        session_start();   
        
           include_once '../../dao/UsuarioDao.php';
           include_once '../../dto/Usuario.php';
           
//   require_once '../../dao/UsuarioDao.php';
//   require_once '../../dto/Usuario.php';
/**
         *Buscar por id y compara la clave     
         *La request debe traer Cargo_id y contraseña. Recuerde que edward dijo que toca conectar a otra BD
         *
         */
            //$id=filter_input(INPUT_POST,'Cargo_id');
            //$usuario->setCargo_id($id);
            $usuario = new Usuario();
  
            $cargo_id =$_POST['Cargo_id'];
            $usuario->setCargo_id($cargo_id);
            $contra =$_POST['Contraseña'];
            $mipassword = md5($contra);
            $usuario->setCargo_id($cargo_id);
            $usuario->setContrasena($mipassword);
            $usuDao = new UsuarioDao();
            $result = $usuDao->buscarBdPescadero($usuario);
            
       
            if($result->getCargo_id()==null){
                
                echo '<script language="javascript">window.location="../../index.php"</script>';      
                       
               
            }else{
     
     if($result->getCargo_id()=="2"||$result->getCargo_id()=="3"){//tipo director 1
         $_SESSION['id_usuario'] = $result->getId(); 
         $_SESSION['cargo_id'] = $result->getCargo_id();
         $_SESSION['nombre_usuario'] = $result->getNombre();
         $_SESSION['Correo'] = $result->getCorreo();

          echo '<script language="javascript">window.location="../../vista/formPrincipal_gerencia.php"</script>';

     }

//          echo '<script language="javascript">window.location="../../vista/formPrincipal_gerencia.php"</script>';
////          
////     }
     
     if($result->getCargo_id()=="29"){//tipo director 1
         $_SESSION['id_usuario'] = $result->getId(); 
         $_SESSION['cargo_id'] = $result->getCargo_id();
         $_SESSION['nombre_usuario'] = $result->getNombre();
          $_SESSION['Correo'] = $result->getCorreo();

           
          echo '<script language="javascript">window.location="../../vista/formPrincipal_Adm.php"</script>';
          
     } 
     else {
         $_SESSION['id_usuario'] = $result->getId(); 
         $_SESSION['cargo_id'] = $result->getCargo_id();
         $_SESSION['nombre_usuario'] = $result->getNombre();
          $_SESSION['Correo'] = $result->getCorreo();
           

           echo '<script language="javascript">window.location="../../vista/formPrincipal.php"</script>';
     }
            }
   
   ?>