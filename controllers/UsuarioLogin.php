<?php
     session_start();   
include_once realpath('../control/UsuarioController.php');
include_once realpath('../dto/Usuario.php');
$cargoId = $_POST['Cargo_id'];
$pass = md5($_POST['Contraseña']);
$usuario = UsuarioController::login($cargoId);
if ($usuario->getContraseña() == $pass) {
    $_SESSION['id_usuario'] = $usuario->getId();
    $_SESSION['cargo_id'] = $usuario->getCargo_id();
    $_SESSION['nombre_usuario'] = $usuario->getNombre();    
    switch ($usuario->getCargo_id()) {
        case 2: {
                echo '<script language="javascript">window.location="../vista/formPrincipal_gerencia.php"</script>';
                break;
            }
        case 3: {
                echo '<script language="javascript">window.location="../vista/formPrincipal_gerencia.php"</script>';
                break;
            }
        case 29: {
                echo '<script language="javascript">window.location="../vista/formPrincipal_Adm.php"</script>';
                break;
            }
        default: {
                echo '<script language="javascript">window.location="../vista/formPrincipal.php"</script>';
            }
    }
} else {
    echo '<script language="javascript">window.location="../index.php"</script>';
}

