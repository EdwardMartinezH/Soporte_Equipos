<?php        
        /**
         *Cuando se arma un equipo por partes se debe llegar aquí
         *La request debe traer idEquipo,idMouse, idTeclado, idCamara, idPantalla, idImpresora, idAudifonos, idBafles         
         */        
            $id=$filter_input(INPUT_POST,'idEquipo');
            //$equipo = dao.equipo
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

