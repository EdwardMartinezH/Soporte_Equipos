<?php
require_once '../../dao/PerifericoDao.php.php';
include_once '../../dto/Perifericos.php.php';


/**
         *Insertar un perifericos. Se trae todo. La validación se hace en HTML y aquí llegan muuuchos ""      
         *La request debe traer idEquipo,idTipoPeriferico,idTipoPantalla,marca,modelo,serial,pulgadas,sticker_activo,fecha_compra         
         */        
            $perifericos=new Perifericos();
            $perifericoDao = new PerifericoDao();
                              
            $perifericos->setTipoPeriferico(filter_input(INPUT_POST,'idTipoPeriferico'));                            
                $perifericos->setTipoPantallatipoPantalla(filter_input(INPUT_POST,'idTipoPantalla'));
                $perifericos->setPulgadas(filter_input(INPUT_POST,'pulgadas'));
            $perifericos->setMarca(filter_input(INPUT_POST,'marca'));
            $perifericos->setModelo(filter_input(INPUT_POST,'modelo'));
            $perifericos->setSerial(filter_input(INPUT_POST,'serial'));
            $perifericos->setStikerActivo(filter_input(INPUT_POST,'sticker_activo'));
            $perifericos->setFechaCompra(filter_input(INPUT_POST,'fecha_compra'));            
            // guardar en dao                   
            $perifericoDao->guardar($periferico);
            
            var_dump("Acabo");
