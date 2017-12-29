<?php

include_once 'Conect.php';

/**
 * 
 * @param type $informacion_general
 * @param type $informacion_tributaria
 * @param type $productos
 * @param type $codiciones_comerciales
 * @param type $referencias_comerciales
 * @param type $referencias_bancarias
 * @return type
 */


//============================================================INICIO DE SESION ========================================================================


//function iniciarSesion($cc_nitC, $passC) {
//    Conect::conection();
//    $consulta = "SELECT `proveedor_id` FROM `contacto` WHERE `cc_c`= $cc_nitC AND `pass_c` = $passC;";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
//    $obj = Conect::getObject($resul);
////    echo  $obj->id;
//    Conect::desconnetar();
//    return $obj->id;
//    
//}


//============================================================ REGISTRAR ========================================================================



//function registrar_Proveedor($informacion_general, $informacion_contacto, $informacion_tributaria, $productos, $codiciones_comerciales, $referencias_comerciales, $referencias_bancarias) {
//
//    try {
//        Conect::conection();
//        Conect::ejecutarConsultaSQL("BEGIN");
//
//        
//        $proveedor_id = validarIdProveedor($informacion_general['cc_nit']);
//       
//        if($proveedor_id=="REPETIDO"){
//     
//            return false;
//        }
//
//        
//
//        if (!registrar_Informacion_General($informacion_general)) {
//            echo ":: Error :: General<br>";
//            return transaccion("ROLLBACK");
//        }
//            $proveedor_id = getultimo();
//        
//        
//         
//        
//        if (!registrar_telefono($informacion_general, $proveedor_id)) {
//            echo ":: Error :: Contacto<br>";
//            return transaccion("ROLLBACK");
//        }
//
//         if (!registrar_certificados($informacion_general, $proveedor_id)) {
//            echo ":: Error :: Contacto<br>";
//            return transaccion("ROLLBACK");
//        }
//        
//        if (!registrar_Informacion_Contacto($informacion_contacto, $proveedor_id)) {
//            echo ":: Error :: Contacto<br>";
//            return transaccion("ROLLBACK");
//        }
//        
//
//
//        if (!registrar_Informacion_Tributaria($informacion_tributaria, $proveedor_id)) {
//            echo ":: Error :: Tributaria<br>";
//            return transaccion("ROLLBACK");
//        }
//
//        foreach ($productos as $key => $value) {
//            if (!registrar_producto($value, $proveedor_id)) {
//                echo ":: Error :: Producto<br>";
//                return transaccion("ROLLBACK");
//            }
//        }
//
//        if (!registrar_Condiciones_Comerciales($codiciones_comerciales, $proveedor_id)) {
//            echo ":: Error :: Condiciones<br>";
//            return transaccion("ROLLBACK");
//        }
//        
//
//        foreach ($referencias_comerciales as $value) {            
//            if (!registrar_Referencias_Comerciales($value, $proveedor_id)) {
//                echo ":: Error :: Referencia Comerciales<br>";
//                return transaccion("ROLLBACK");
//            }
//        }
//
//        foreach ($referencias_bancarias as $value) {            
//            if (!registrar_Referencias_Bancararias($value, $proveedor_id)) {
//                echo ":: Error :: Referencia Bancarias<br>";
//                return transaccion("ROLLBACK");
//            }
//        }
////        return "bien";
////        echo ":: Registro bien ::<br>";
//        return transaccion("COMMIT");
//    } catch (Exception $ex) {
//        echo ("registrar proveedor || Error:" . $ex->getMessage());
//        return transaccion("ROLLBACK");
//    }
//}

// -------- REGISTRAR ------- //

/**
 * representante_legal
 * @param type $informacion_general
 * @return type
 */


//function registrar_Informacion_General($informacion_general) {
//    $consulta = "INSERT INTO `informacion_general`(`fechaRegistro`, `fechaActualizacion`,`cc_nit`, `nombre`, `representante_legal`, `fecha_constitucion`, `matricula_mercantil`, `email`, `digito_verificacion`,"
//            . " `departamento`,`ciudad`, `direccion`) VALUES ('" . $informacion_general['fechaRegistro'] . "','" . $informacion_general['fechaActualizacion'] . "','" . $informacion_general['cc_nit'] . "', '" . $informacion_general['nombre'] . "', '" . $informacion_general['representante_legal'] . "',"
//            . " '" . $informacion_general['fecha_constitucion'] . "', '" . $informacion_general['matricula_mercantil'] . "', '" . $informacion_general['email'] . "',"
//            . " '" . $informacion_general['digito_verificacion'] . "', " . $informacion_general['dep'] . "," . $informacion_general['ciudad'] . ", '" . $informacion_general['direccion'] . "')";
//
//    $resul = Conect::ejecutarConsultaSQL($consulta);
////    echo ":: Consulta ::1. General :: Result ".  var_dump($resul)."<br>";
//    return $resul;
//}
/**
 * 
 * @param type $informacion_general
 * @param type $proveedor_id
 * @return type
 */
//function registrar_telefono($informacion_general, $proveedor_id) {
//    $consulta = "INSERT INTO `telefono`(`proveedor_id`, `celular`, `fijo`, `fax`)"
//            . " VALUES ('$proveedor_id', '" . $informacion_general['celular'] . "', '" . $informacion_general['fijo'] . "', '" . $informacion_general['fax'] . "')";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
////    echo ":: Consulta ::1.1.  Telefono :: Result ".  var_dump($resul)."<br>";
//    return $resul;
//}

/**
 * 
 * @param type $informacion_general
 * @param type $proveedor_id
 * @return type
 */
function registrar_certificados($informacion_general, $proveedor_id) {
    $consulta = "INSERT INTO `certificados`(`proveedor_id`, `version_basc`, `version_iso`, `otros`)"
            . " VALUES ('$proveedor_id', '" . $informacion_general['version_basc'] . "', '" . $informacion_general['version_iso'] . "', '" . $informacion_general['otros'] . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//     echo ":: Consulta ::1.2.  Certificados :: Result ".  var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $informacion_contacto
 * @param type $proveedor_id
 * @return type
 */
function registrar_Informacion_Contacto($informacion_contacto, $proveedor_id) {
    $consulta = "INSERT INTO `contacto`(`proveedor_id`, `nombre_c`, `cc_c`, `tel_c`, `cel_c`, `correo_c`, `pass_c`) VALUES ('$proveedor_id',"
            . " '" . $informacion_contacto['nombreC'] . "', '" . $informacion_contacto['cc_nitC'] . "', '" . $informacion_contacto['fijoC'] . "',"
            . " '" . $informacion_contacto['celularC'] . "', '" . $informacion_contacto['emailC'] . "', '" . $informacion_contacto['passC'] . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::2. Contacto :: Result ".var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $informacion_tributaria
 * @param type $proveedor_id
 * @return typeactividad_s
 * actividad_p
 */
function registrar_Informacion_Tributaria($informacion_tributaria, $proveedor_id) {
    $consulta = "INSERT INTO `informacion_tributaria`(`proveedor_id`, `gran_contibuyente`, `regimen`, `autorretenedor`, `codigo_ciiu`,  `actividad_s`) VALUES ('$proveedor_id',"
            . " '" . $informacion_tributaria['gran_contribuyente'] . "', '" . $informacion_tributaria['regimen'] . "', '" . $informacion_tributaria['autorretenedor'] . "',"
            . " '" . $informacion_tributaria['codigo_ciiu'] . "' , '" . $informacion_tributaria['actividad_s'] . "')";
//             . " '" . $condicion_comercial['forma_pago'] . "', '" . $condicion_comercial['tiempo_pago'] . "', '" . $condicion_comercial['tiempo_entrega'] . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    
//    . $informacion_tributaria['actividad_p'] . "', '" . $informacion_tributaria['actividad_s'] . "')";
    
//    echo ":: Consulta ::3. Tributaria :: Result ".var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $producto
 * @param type $proveedor_id
 * @return type
 */
function registrar_producto($producto, $proveedor_id) {
    $consulta = "INSERT INTO `productos`(`proveedor_id`, `nombre_producto`) VALUES ('$proveedor_id', '" . $producto . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::4. Producto :: Result ".var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $condicion_comercial
 * @param type $proveedor_id
 * @return type
 */
function registrar_Condiciones_Comerciales($condicion_comercial, $proveedor_id) {
    $consulta = "INSERT INTO `condicion_comercial`(`proveedor_id`, `forma_pago`, `tiempo_pago`, `tiempo_entrega`, `descuento`, `garantia`) VALUES ('$proveedor_id',"
            . " '" . $condicion_comercial['forma_pago'] . "', '" . $condicion_comercial['tiempo_pago'] . "', '" . $condicion_comercial['tiempo_entrega'] . "',"
            . " '" . $condicion_comercial['descuento'] . "', '" . $condicion_comercial['garantia'] . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::5. Condiciones :: Result ".var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $referencia_comercial
 * @param type $proveedor_id
 * @return type
 */
function registrar_Referencias_Comerciales($referencia_comercial, $proveedor_id) {
    $consulta = "INSERT INTO `referencias_comerciales`(`proveedor_id`, `entidad`, `telefono`, `contacto`, `cargo`, `verificacion`) VALUES ('$proveedor_id',"
            . " '" . $referencia_comercial['entidad'] . "', '" . $referencia_comercial['telefono'] . "', '" . $referencia_comercial['contacto'] . "', '" . $referencia_comercial['cargo'] . "',"
            . " '" . $referencia_comercial['verificacion'] . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::6. Referencias_Comerciales :: Result ".var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $referencia_bancaria
 * @param type $proveedor_idtipo_cuenta
 * @return type
 */
function registrar_Referencias_Bancararias($referencia_bancaria, $proveedor_id) {
    $consulta = "INSERT INTO `referencias_bancarias`(`proveedor_id`, `banco`, `titular`, `tipo_cuenta`, `no_cuenta`, `verificacion`) VALUES ('$proveedor_id', "
            . " '" . $referencia_bancaria['banco'] . "', '" . $referencia_bancaria['titular'] . "', '" . $referencia_bancaria['tipo_cuenta'] . "', '" . $referencia_bancaria['no_cuenta'] . "',"
            . " '" . $referencia_bancaria['verificacion'] . "')";
    
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::7. Referencias_Bancararias :: Result ".var_dump($resul)."<br>";
    return $resul;
}

function registrarDocumentos($archivos,$tipo_persona){
    Conect::conection();
    $proveedor_id =getultimo();
    $tipo="";
    if($tipo_persona == "natural-tab"){
        $tipo="file_natural";
     }
     else
         $tipo="file_juridico";
     
    $consulta = "INSERT INTO `documentacion`(`proveedor_id`, `tipo_persona`, `rut`, `camaracomercio`, `cedula`, `certibanco`, `basc`, `iso`, `otro`, `dian`, `confidencialidad`, `visita`)"
            . " VALUES ($proveedor_id, '".$tipo_persona."','".$archivos[''.$tipo.'_'.'rut']."', '".$archivos[''.$tipo.'_'.'camara']."', '".$archivos[''.$tipo.'_'.'cedula']."', '".$archivos[''.$tipo.'_'.'certificado_bancario']."', '".$archivos[''.$tipo.'_'.'certificado_basc']."',"
            . " '".$archivos[''.$tipo.'_'.'certificado_iso']."', '".$archivos[''.$tipo.'_'.'otros_certificados']."', '".$archivos[''.$tipo.'_'.'dian']."','".$archivos[''.$tipo.'_'.'seguridad']."','".$archivos[''.$tipo.'_'.'visita']."')";
    
    $resul = Conect::ejecutarConsultaSQL($consulta);
    Conect::desconnetar();
    return $resul;
}

/**
 * 
 * @return type
 */
function transaccion($accion) {
    Conect::ejecutarConsultaSQL($accion);
    Conect::desconnetar();
    if($accion === "COMMIT"){
        return true;
    }else{
        return false;
    }
}


//============== *****************************************CONSULTAS DE VALIDACION******************************************* ===================//

/**
 * 
 * @param type $cc_nit
 * @return type
 */
function validarIdProveedor($cc_nit){
    $consulta = "SELECT id FROM informacion_general WHERE cc_nit = $cc_nit LIMIT 1";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    if(Conect::getCantidadFilas($resul)>0){
//       echo ":: Consulta ::7. cantidad de archivos :: Result ".var_dump($resul)."<br>";
      return "REPETIDO";
    }
    else {
        return "no";
    }
}


function validarEstadoLogin(usuario_DTO $user) {

        $this->bd->conection();
        $consulta = "SELECT `proveedor_id`,  FROM `contacto` WHERE `correo_c`='" . $user->getCorreo() . "' AND `pass_c`='" . $user->getContrasena() . "'AND `estado`!= 0";
        $resul = Conect::ejecutarConsultaSQL($consulta);
        if (Conect::getCantidadFilas($resul) > 0) {
//       echo ":: Consulta ::7. cantidad de archivos :: Result ".var_dump($resul)."<br>";
            Conect::desconnetar();
            return "si";
        } else {
            Conect::desconnetar();
            return "no";
        }
//    echo  $obj->id;
    }

function getultimo(){
    $consulta = "SELECT id FROM informacion_general ORDER BY id DESC LIMIT 1";
    $resul = Conect::ejecutarConsultaSQL($consulta);
  
    $obj = Conect::getObject($resul);
         return $obj->id;
}




/**
 * representante_legal
 * @param type $informacion_general
 * @return type
 */



//===========================================================TODAS LAS CONSULTAS ===============================================


/**
 * 
 * @param type $cc_nitC
 * @param type $passC
 * @return type
 */


function consultar_informacion_general($proveedor_id) {
    Conect::conection();
    $informacion_general = array();
    $consulta = "SELECT `cc_nit`, `nombre`, `representante_legal`, `fecha_constitucion`, `matricula_mercantil`, `email`, `digito_verificacion`, `departamento`,`ciudad`, `direccion` FROM `informacion_general` WHERE `id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $informacion_general = Conect::getArray($resul);
   
    return $informacion_general;
}



/**
 * 
 * @param type $informacion_general
 * @param type $proveedor_id
 * @return type
 * 
 *  $obj = Conect::getObject($resul);
//          echo ":: Consulta ::del id . id  :: Result ".var_dump($obj->id)."<br>";
 */



function consultar__telefono( $proveedor_id) {
    $informacion_telefono = array();
    
    $consulta = "SELECT `celular`, `fijo`, `fax` FROM `telefono`  WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
     
    $informacion_telefono = Conect::getArray($resul);
  
    return $informacion_telefono;
}

/**
 * 
 * @param type $informacion_general
 * @param type $proveedor_id
 * @return type
 */
function consultar_certificados($proveedor_id) {
 
    $informacion_certificados = array();
    $consulta = "SELECT `version_basc`, `version_iso`, `otros` FROM `certificados` WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $informacion_certificados = Conect::getArray($resul);

    return $informacion_certificados;
}

/**
 * 
 * @param type $informacion_contacto
 * @param type $proveedor_id
 * @return type
 */
function consultar_Informacion_Contacto($proveedor_id) {
   
    $informacion_contacto = array();
    $consulta = "SELECT `nombre_c`, `cc_c`, `tel_c`, `cel_c`, `correo_c`, `pass_c` FROM `contacto` WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $informacion_contacto = Conect::getArray($resul);
 
    return $informacion_contacto;
}

/**
 * 
 * @param type $informacion_tributaria
 * @param type $proveedor_id
 * @return typeactividad_s
 * actividad_p
 */
function consultar_Informacion_Tributaria( $proveedor_id) {
   
    $informacion_tributaria = array();
    $consulta = "SELECT  `gran_contibuyente`, `regimen`, `autorretenedor`, `codigo_ciiu`,  `actividad_s` FROM `informacion_tributaria` WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $informacion_tributaria = Conect::getArray($resul);
  
    return $informacion_tributaria;
}

/**
 * 
 * @param type $producto
 * @param type $proveedor_id
 * @return type
 */
function consultar_producto($proveedor_id) {
    Conect::conection();
    $producto = array();
    $consulta = "SELECT `nombre_producto` FROM `productos`  WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    $producto = Conect::getArray($resul);
    while ($row = Conect::getArray($resul)){
        array_push($producto, $row);
    }
    Conect::desconnetar();
    return $producto;
}

/**
 * 
 * @param type $condicion_comercial
 * @param type $proveedor_id
 * @return type
 */
function consultar_Condiciones_Comerciales($proveedor_id) {
     Conect::conection();
    $condicion_comercial = array();
    $consulta = "SELECT `forma_pago`, `tiempo_pago`, `tiempo_entrega`, `descuento`, `garantia` FROM `condicion_comercial`   WHERE `proveedor_id`  = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $condicion_comercial = Conect::getArray($resul);
    Conect::desconnetar();
    return $condicion_comercial;
}

/**
 * 
 * @param type $referencia_comercial
 * @param type $proveedor_id
 * @return type
 */
function consultar_Referencias_Comerciales($proveedor_id) {
    Conect::conection();
    $referencia_comercial = array();
    $consulta = "SELECT  `entidad`, `telefono`, `contacto`, `cargo`, `verificacion` FROM `referencias_comerciales` WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $referencia_comercial[0] = Conect::getArray($resul);
    $referencia_comercial[1] = Conect::getArray($resul);
    Conect::desconnetar();
    return $referencia_comercial;
}

/**
 * 
 * @param type $referencia_bancaria
 * @param type $proveedor_id
 * @return type
 */
function consultar_Referencias_Bancararias( $proveedor_id) {
    Conect::conection();
    $referencia_bancaria = array();
    $consulta = "SELECT  `banco`, `titular`, `tipo_cuenta`, `no_cuenta`, `verificacion` FROM `referencias_bancarias` WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $referencia_bancaria[0] = Conect::getArray($resul);
    $referencia_bancaria[1] = Conect::getArray($resul);
    Conect::desconnetar();
    return $referencia_bancaria;
}

function consultar_Referencias_t( $proveedor_id) {
    Conect::conection();
    $referencias_t = array();
    $consulta = "SELECT `tipo_persona` FROM `documentacion` WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $referencias_t = Conect::getArray($resul);
    
    Conect::desconnetar();
    return $referencias_t;
}


 //================================================================ ACTUALIZAR ============================================================================




function actualizar_Proveedor($proveedor_id,$informacion_general, $informacion_contacto, $informacion_tributaria, $productos, $codiciones_comerciales, $referencias_comerciales, $referencias_bancarias) {

//    echo $proveedor_id;
//    echo $informacion_general['nombre'];
//    echo $informacion_contacto;
//    echo $informacion_tributaria;
//    echo $productos;
    
    try {
        Conect::conection();
        Conect::ejecutarConsultaSQL("BEGIN");
   $proveedor_id = sacarIdProveedor($proveedor_id);

        if (!actualizar_informacion_general($informacion_general,$proveedor_id)) {
            echo ":: Error :: General<br>";
//                return true;
             return transaccion("ROLLBACK");
        }

       
        if (!actualizar_telefono($informacion_general,$proveedor_id)) {
            echo ":: Error :: Contacto<br>";
           return transaccion("ROLLBACK");
        }
//
         if (!actualizar_certificados($informacion_general, $proveedor_id)) {
            echo ":: Error :: Contacto<br>";
           return transaccion("ROLLBACK");
        }
        
        if (!actualizar_Informacion_Contacto($informacion_contacto, $proveedor_id)) {
            echo ":: Error :: Contacto<br>";
           return transaccion("ROLLBACK");
        }
        
          if (!actualizar_Informacion_Tributaria($informacion_tributaria, $proveedor_id)) {
            echo ":: Error :: Tributaria<br>";
           return transaccion("ROLLBACK");
        }


        
        borrar_Informacion_productos( $proveedor_id);
        
        foreach ($productos as $key => $value) {
            if (!actualizar_producto($value, $proveedor_id)) {
                echo ":: Error :: Producto<br>";
                return transaccion("ROLLBACK");
            }
        }
       
       
        if (!actualizar_Condiciones_Comerciales($codiciones_comerciales, $proveedor_id)) {
            echo ":: Error :: Condiciones<br>";
         return transaccion("ROLLBACK");
        }
        
       borrar_referencias_comerciales($proveedor_id);

        
       foreach ($referencias_comerciales as $value) {            
            if (!registrar_Referencias_Comerciales($value, $proveedor_id)) {
                echo ":: Error :: Referencia Comerciales<br>";
                return transaccion("ROLLBACK");
            }
        }
        
       
           borrar_referencias_bancarias($proveedor_id);
           
          
              
        foreach ($referencias_bancarias as $value) {            
            if (!registrar_Referencias_Bancararias($value, $proveedor_id)) {
                echo ":: Error :: Referencia Bancarias<br>";
                return transaccion("ROLLBACK");
            }
        }
        
        borrar_Informacion_documentos($proveedor_id);
        
         
        
      
     
       
      return transaccion("COMMIT");
    } catch (Exception $ex) {
        echo ("registrar proveedor || Error:" . $ex->getMessage());
        return transaccion("ROLLBACK");
    }
}




function actualizar_Proveedor1($proveedor_id,$informacion_general, $informacion_contacto, $informacion_tributaria, $productos, $codiciones_comerciales, $referencias_comerciales, $referencias_bancarias) {

//    echo $proveedor_id;
//    echo $informacion_general['nombre'];
//    echo $informacion_contacto;
//    echo $informacion_tributaria;
//    echo $productos;
    
    try {
        Conect::conection();
        Conect::ejecutarConsultaSQL("BEGIN");
   $proveedor_id = sacarIdProveedor($proveedor_id);

        if (!actualizar_informacion_general($informacion_general,$proveedor_id)) {
            echo ":: Error :: General<br>";
//                return true;
             return transaccion("ROLLBACK");
        }

       
        if (!actualizar_telefono($informacion_general,$proveedor_id)) {
            echo ":: Error :: Contacto<br>";
           return transaccion("ROLLBACK");
        }
//
         if (!actualizar_certificados($informacion_general, $proveedor_id)) {
            echo ":: Error :: Contacto<br>";
           return transaccion("ROLLBACK");
        }
        
        if (!actualizar_Informacion_Contacto($informacion_contacto, $proveedor_id)) {
            echo ":: Error :: Contacto<br>";
           return transaccion("ROLLBACK");
        }
        
          if (!actualizar_Informacion_Tributaria($informacion_tributaria, $proveedor_id)) {
            echo ":: Error :: Tributaria<br>";
           return transaccion("ROLLBACK");
        }


        
        borrar_Informacion_productos( $proveedor_id);
        
        foreach ($productos as $key => $value) {
            if (!actualizar_producto($value, $proveedor_id)) {
                echo ":: Error :: Producto<br>";
                return transaccion("ROLLBACK");
            }
        }
       
       
        if (!actualizar_Condiciones_Comerciales($codiciones_comerciales, $proveedor_id)) {
            echo ":: Error :: Condiciones<br>";
         return transaccion("ROLLBACK");
        }
        
       borrar_referencias_comerciales($proveedor_id);

        
       foreach ($referencias_comerciales as $value) {            
            if (!registrar_Referencias_Comerciales($value, $proveedor_id)) {
                echo ":: Error :: Referencia Comerciales<br>";
                return transaccion("ROLLBACK");
            }
        }
        
       
           borrar_referencias_bancarias($proveedor_id);
           
          
              
        foreach ($referencias_bancarias as $value) {            
            if (!registrar_Referencias_Bancararias($value, $proveedor_id)) {
                echo ":: Error :: Referencia Bancarias<br>";
                return transaccion("ROLLBACK");
            }
        }
        
//        borrar_Informacion_documentos($proveedor_id);
      
         
        
      
     
       
      return transaccion("COMMIT");
    } catch (Exception $ex) {
        echo ("registrar proveedor || Error:" . $ex->getMessage());
        return transaccion("ROLLBACK");
    }
}




/**
 * 
 * @param type $cc_nitC
 * @param type $passC
 * @return type
 */


function actualizar_informacion_general($informacion_general,$proveedor_id) {
    Conect::conection();
 
    $consulta = "UPDATE `informacion_general` SET `fechaActualizacion`='" .$informacion_general['fechaActualizacion']. "',`cc_nit`='" .$informacion_general['cc_nit']. "', `nombre`='" .$informacion_general['nombre']. "',
    `representante_legal`='" .$informacion_general['representante_legal'] . "',`fecha_constitucion`= '" .$informacion_general['fecha_constitucion']. "' ,
    `matricula_mercantil`='" .$informacion_general['matricula_mercantil'] . "',`email`='" .$informacion_general['email']. "' ,
    `digito_verificacion`='" .$informacion_general['digito_verificacion']. "' ,`ciudad`=" .$informacion_general['ciudad']. " , `departamento`=" .$informacion_general['dep']. ",
    `direccion`='" .$informacion_general['direccion']. "' WHERE `id` = $proveedor_id";

     $resul = Conect::ejecutarConsultaSQL($consulta);
   
    return true;
  

}



/**
 * 
 * @param type $informacion_general
 * @param type $proveedor_id
 * @return type
 */

function actualizar_telefono( $informacion_general,$proveedor_id) {

    
    $consulta = "UPDATE `telefono` SET `celular`='" . $informacion_general['celular'] . "',`fijo`='" . $informacion_general['fijo'] . "',`fax`= '" . $informacion_general['fax'] . "'   WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
   
  
   return true;
}

/**
 * 
 * @param type $informacion_general
 * @param type $proveedor_id
 * @return type
 */
function actualizar_certificados($informacion_general, $proveedor_id) {
   
    
    $consulta = "UPDATE `certificados` SET `version_basc` ='" . $informacion_general['version_basc'] . "', `version_iso`='" . $informacion_general['version_iso'] . "', `otros` ='" . $informacion_general['otros'] . "'  WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
   
    
   return true;
}

/**
 * 
 * @param type $informacion_contacto
 * @param type $proveedor_id
 * @return type
 */

function actualizar_Informacion_Contacto($informacion_contacto, $proveedor_id) {
   
   
    $consulta = "UPDATE `contacto` SET `nombre_c`= '" . $informacion_contacto['nombreC'] . "', `cc_c`='" . $informacion_contacto['cc_nitC'] . "', `tel_c`='" . $informacion_contacto['fijoC'] . "', `cel_c`='" . $informacion_contacto['celularC'] . "', `correo_c`='" . $informacion_contacto['emailC'] . "', `estado`='0'   WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
  
   return true;
}

/**
 * 
 * @param type $informacion_tributaria
 * @param type $proveedor_id
 * @return typeactividad_s
 * actividad_p
 */


function actualizar_Informacion_Tributaria($informacion_tributaria, $proveedor_id) {
 
    
    $consulta = "UPDATE `informacion_tributaria` SET `gran_contibuyente`='" . $informacion_tributaria['gran_contribuyente'] . "', `regimen`='" . $informacion_tributaria['regimen'] . "', `autorretenedor`='" . $informacion_tributaria['autorretenedor'] . "', `codigo_ciiu`='" . $informacion_tributaria['codigo_ciiu'] . "', `actividad_s`='" . $informacion_tributaria['actividad_s'] . "'  WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
  
    return true;
}

/**
 * 
 * @param type $producto
 * @param type $proveedor_id
 * @return type
 */
//function actualizar_producto($producto, $proveedor_id) {
// 
//    
//    $consulta = "UPDATE `productos` SET `nombre_producto` ='" . $producto . "'  WHERE `proveedor_id` = $proveedor_id";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
// 
//    return true;
//}


function borrar_Informacion_productos( $proveedor_id) {
    
    $consulta = " DELETE FROM `productos` WHERE `proveedor_id`=$proveedor_id"; 
    $resul = Conect::ejecutarConsultaSQL($consulta);
       
//    $consulta = "INSERT INTO `productos`(`proveedor_id`, `nombre_producto`) VALUES ('$proveedor_id', '" . $producto . "')";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::4. Producto :: Result ".var_dump($resul)."<br>";
    return $resul;
}




function actualizar_producto($producto, $proveedor_id) {
    
//    $consulta = " DELETE FROM `productos` WHERE `proveedor_id`=$proveedor_id"; 
//    $resul = Conect::ejecutarConsultaSQL($consulta);
//    
   
    $consulta = "INSERT INTO `productos`(`proveedor_id`, `nombre_producto`) VALUES ('$proveedor_id', '" . $producto . "')";
    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::4. Producto :: Result ".var_dump($resul)."<br>";
    return $resul;
}

/**
 * 
 * @param type $condicion_comercial
 * @param type $proveedor_id
 * @return type
 */
function borrar_referencias_comerciales( $proveedor_id) {
    
    $consulta = " DELETE FROM `referencias_comerciales`  WHERE `proveedor_id`=$proveedor_id"; 
    $resul = Conect::ejecutarConsultaSQL($consulta);
       
//    $consulta = "INSERT INTO `productos`(`proveedor_id`, `nombre_producto`) VALUES ('$proveedor_id', '" . $producto . "')";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::4. Producto :: Result ".var_dump($resul)."<br>";
    return $resul;
}

function borrar_referencias_bancarias( $proveedor_id) {
    
    $consulta = " DELETE FROM `referencias_bancarias` WHERE `proveedor_id`=$proveedor_id"; 
    $resul = Conect::ejecutarConsultaSQL($consulta);
       
//    $consulta = "INSERT INTO `productos`(`proveedor_id`, `nombre_producto`) VALUES ('$proveedor_id', '" . $producto . "')";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::4. Producto :: Result ".var_dump($resul)."<br>";
    return $resul;
}

function borrar_Informacion_documentos( $proveedor_id) {
    
    $consulta = " DELETE FROM `documentacion` WHERE `proveedor_id`=$proveedor_id"; 
    $resul = Conect::ejecutarConsultaSQL($consulta);
       
//    $consulta = "INSERT INTO `productos`(`proveedor_id`, `nombre_producto`) VALUES ('$proveedor_id', '" . $producto . "')";
//    $resul = Conect::ejecutarConsultaSQL($consulta);
//    echo ":: Consulta ::4. Producto :: Result ".var_dump($resul)."<br>";
    return $resul;
}



function actualizar_Condiciones_Comerciales($condicion_comercial, $proveedor_id) {
   
   
    $consulta = "UPDATE `condicion_comercial` SET `forma_pago`='" . $condicion_comercial['forma_pago'] . "',`tiempo_pago`='" . $condicion_comercial['tiempo_pago'] . "',`tiempo_entrega`='" . $condicion_comercial['tiempo_entrega'] . "',`descuento`='" . $condicion_comercial['descuento'] . "',`garantia`='" . $condicion_comercial['garantia'] . "' WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
  
   return true;
}

/**
 * 
 * @param type $referencia_comercial
 * @param type $proveedor_id
 * @return type
 */
function actualizar_Referencias_Comerciales($referencia_comercial, $proveedor_id) {
    
    
    $consulta = "UPDATE `referencias_comerciales` SET `entidad`='" . $referencia_comercial['entidad'] . "',`telefono`='" . $referencia_comercial['telefono'] . "',`contacto`='" . $referencia_comercial['contacto'] . "',`cargo`= '" . $referencia_comercial['cargo'] . "' WHERE`proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
  
   return true;
}

/**
 * 
 * @param type $referencia_bancaria
 * @param type $proveedor_id
 * @return type
 */
function actualizar_Referencias_Bancararias($referencia_bancaria, $proveedor_id) {
   
    
    $consulta = "UPDATE `referencias_bancarias` SET`banco`='" . $referencia_bancaria['banco'] . "',`titular`='" . $referencia_bancaria['titular'] . "',`tipo_cuenta`='" . $referencia_bancaria['tipo_cuenta'] . "',`no_cuenta`='" . $referencia_bancaria['no_cuenta'] . "' WHERE `proveedor_id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
   
    Conect::desconnetar();
    return true;
}



function actualizarDocumentos($archivos,$tipo_persona,$proveedor_id){
    
    Conect::conection();
    $proveedor_id = sacarIdProveedor($proveedor_id);
    $tipo="";
    if($tipo_persona == "natural-tab"){
        $tipo="file_natural";
     }
     else
         $tipo="file_juridico";
     
    $consulta = "INSERT INTO `documentacion`(`proveedor_id`, `tipo_persona`, `rut`, `camaracomercio`, `cedula`, `certibanco`, `basc`, `iso`, `otro`, `dian`, `confidencialidad`, `visita`)"
            . " VALUES ($proveedor_id, '".$tipo_persona."','".$archivos[''.$tipo.'_'.'rut']."', '".$archivos[''.$tipo.'_'.'camara']."', '".$archivos[''.$tipo.'_'.'cedula']."', '".$archivos[''.$tipo.'_'.'certificado_bancario']."', '".$archivos[''.$tipo.'_'.'certificado_basc']."',"
            . " '".$archivos[''.$tipo.'_'.'certificado_iso']."', '".$archivos[''.$tipo.'_'.'otros_certificados']."', '".$archivos[''.$tipo.'_'.'dian']."','".$archivos[''.$tipo.'_'.'seguridad']."','".$archivos[''.$tipo.'_'.'visita']."')";
    
    $resul = Conect::ejecutarConsultaSQL($consulta);
    Conect::desconnetar();
    return $resul;
    
    
}


function sacarIdProveedor($cc_nit){
    $consulta = "SELECT id FROM informacion_general WHERE cc_nit = $cc_nit LIMIT 1";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    if(Conect::getCantidadFilas($resul)>0){
         $obj = Conect::getObject($resul);
      
         return $obj->id;

    }
    else {
        
        return "no";
        
    }
}


function consultar_informacion_general($proveedor_id) {
    Conect::conection();
    $informacion_general = array();
    $consulta = "SELECT `cc_nit`, `nombre`, `representante_legal`, `fecha_constitucion`, `matricula_mercantil`, `email`, `digito_verificacion`, `departamento`,`ciudad`, `direccion` FROM `informacion_general` WHERE `id` = $proveedor_id";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $informacion_general = Conect::getArray($resul);
   
    return $informacion_general;
}
