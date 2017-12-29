<?php
    require_once '../../dao/EquipoDao.php';
    require_once '../../dto/Equipo.php'; 
    require_once '../../dto/Perifericos.php';
    $equipoDao = new EquipoDao();
     
    $equipo=new Equipo();                	
    $id=$equipoDao->guardar(filter_input(INPUT_POST,'idUsuario'));
    
    $equipo->setIdEquipo($id);
    $idMouse=filter_input(INPUT_POST,'idMouse');
    $idTeclado=filter_input(INPUT_POST,'idTeclado');
    $idCamara=filter_input(INPUT_POST,'idCamara');
    $idPantalla=filter_input(INPUT_POST,'idPantalla');
    $idImpresora=filter_input(INPUT_POST,'idImpresora');
    $idAudifonos=filter_input(INPUT_POST,'idAudifonos');
    $idBafles=filter_input(INPUT_POST,'idBafles');
    $arr = array($idMouse,$idTeclado,$idCamara,$idPantalla,$idImpresora,$idAudifonos,$idBafles);
    foreach ($arr as $idPeriferico) {                
        //$periferico = dao.buscar
        $periferico->setEquipoequipo($equipo);                
        //dao.guardar
    }


