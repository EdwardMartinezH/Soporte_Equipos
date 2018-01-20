<?php


/*

  First encrypt the key passed by the form, then compare it to the already encrypted key we have stored inside our session variable

 */





    $nombre = htmlspecialchars("");
    $email = htmlspecialchars($_POST["email"]);
    $cargo = htmlspecialchars($_POST["cargo"]);
    $cargo =
    $asunto = "si se pudo";
    $mensaje = "Responder a: $email \n";
    $mensaje.= htmlspecialchars($_POST["mensaje"]);



    require "lib/correo/class.phpmailer.php";

    $mail = new PHPMailer;

    //indico a la clase que use SMTP
    $mail->IsSMTP();

    //permite modo debug para ver mensajes de las cosas que van ocurriendo
    //$mail->SMTPDebug = 2;
    //Debo de hacer autenticaci�n SMTP
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";

    //indico el servidor de Gmail para SMTP
    $mail->Host = "smtp.gmail.com";

    //indico el puerto que usa Gmail
    $mail->Port = 465;

    //indico un usuario / clave de un usuario de gmail
   // $mail->Username = "dictamenescertiretie@gmail.com";

//indico un usuario / clave de un usuario de gmail
          $mail->Username = "tuemail@gmail.com";
          $mail->Password = "tupassword";
       
          $mail->From = "tuemail@gmail.com";
        
          $mail->FromName = "Administrador";
        
          $mail->Subject = $asunto;
        
          $mail->addAddress($email, $nombre);
        
          $mail->MsgHTML($mensaje);




    $mail->Username = "nocontestar.solicitudservicio@gmail.com";
    
    $mail->Password = "soporte201";

    $mail->From = $email;

    $mail->FromName = "Soporte de Servicio";

    $mail->Subject = $cargo;

    $mail->addAddress($email, $nombre);

    $mail->MsgHTML($mensaje);

    if ($mail->Send()) {

        echo "<div class='alert alert-success alert-dismissable'>
                                <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
                                <center> MENSAJE RECIBIDO</center>
                                  
                            </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissable'>
                                <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
                                <center> ERROR AL ENVIAR MENSAJE</center>
                                  
                            </div>";
    }

?>
