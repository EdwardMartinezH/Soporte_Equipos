<?php
/**
         *Insertar un perifericos. Se trae todo. La validación se hace en HTML y aquí llegan muuuchos ""      
         *La request debe traer idEquipo,idTipoPeriferico,idTipoPantalla,marca,modelo,serial,pulgadas,sticker_activo,fecha_compra         
         */        
            $perifericos=new Perifericos();
            $equipo=new Equipo();
            $equipo->setIdEquipo(filter_input(INPUT_POST,'idEquipo'));
            $perifericos->setEquipoequipo($equipo);            
            $tipoPeriferico=new TipoPeriferico();
            $tipoPeriferico->setIdTipoPeriferico(filter_input(INPUT_POST,'idTipoPeriferico'));
            $perifericos->setTipoPeriferico($tipoPeriferico);
            $tipoPantalla=new TipoPantalla();
            $tipoPantalla->setIdTipoPantalla(filter_input(INPUT_POST,'idTipoPantalla'));            
            $perifericos->setTipoPantallatipoPantalla($tipoPantalla);
            
            $perifericos->setMarca(filter_input(INPUT_POST,'marca'));
            $perifericos->setModelo(filter_input(INPUT_POST,'modelo'));
            $perifericos->setSerial(filter_input(INPUT_POST,'serial'));
            $perifericos->setStikerActivo(filter_input(INPUT_POST,'sticker_activo'));
            $perifericos->setPulgadas(filter_input(INPUT_POST,'pulgadas'));
            $perifericos->setFechaCompra(filter_input(INPUT_POST,'fecha_compra'));            
            // guardar en dao                   

