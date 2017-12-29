<?php       
        /**
         *Buscar un software         
         *La request debe traer idSoftware
         *
         */        
            $software=new Software();
            $id=filter_input(INPUT_POST,'idSoftware');
            $software->setIdSoftware($id);
            //$software = dao.software
            //return para mostrar

