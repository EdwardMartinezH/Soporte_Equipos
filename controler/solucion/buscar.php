<?php
       /**
         *Buscar un solucion         
         *La request debe traer idSolucion
         *
         */        
            $solucion=new Solucion();
            $id=filter_input(INPUT_POST,'idSolucion');
            $solucion->setIdSolucion($id);
            //$solucion = dao.solucion
            //return para mostrar

