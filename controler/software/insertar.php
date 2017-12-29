<?php
/**
         *Insertar un software         
         *La request debe traer idEquipo, tipoSoftware, fechaVencimiento, version, nombre         
         */        
            $software=new Software();
            $equipo=new Equipo();
            $equipo->setIdEquipo(filter_input(INPUT_POST,'idEquipo'));
            $software->setEquipoequipo($equipo);            
            $software->setTipoSoftwareIdtipoSoftware(filter_input(INPUT_POST,'tipoSoftware'));
            $software->setFechaVencimiento(filter_input(INPUT_POST,'fechaVencimiento'));
            $software->setVersion(filter_input(INPUT_POST,'version'));
            $software->setNombre(filter_input(INPUT_POST,'nombre'));            
            // guardar en dao                   

