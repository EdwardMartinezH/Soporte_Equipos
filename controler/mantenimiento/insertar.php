<?php   
        /**
         *Insertar un Mantenimiento         
         *La request debe traer fecha_mantenimiento, observaciones
         */        
            $mantenimiento=new Mantenimiento();            
            $mantenimiento->setFechaMantenimiento(filter_input(INPUT_POST,'fecha_mantenimiento'));                       
            $mantenimiento->setObservaciones(filter_input(INPUT_POST,'observaciones'));
            // guardar en dao           

