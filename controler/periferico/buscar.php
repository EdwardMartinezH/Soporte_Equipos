<?php
 /**
         *Buscar un perifericos         
         *La request debe traer idPerifericos
         *
         */        
            $perifericos=new Perifericos();
            $id=filter_input(INPUT_POST,'idPerifericos');
            $perifericos->setIdPerifericos($id);
            //$perifericos = dao.perifericos
            //return para mostrar


