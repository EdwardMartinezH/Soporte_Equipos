<?php
/**
         *Buscar un mantenimiento         
         *La request debe traer idMantenimiento
         *
         */        
            $mantenimiento=new Mantenimiento();
            $id=filter_input(INPUT_POST,'idMantenimiento');
            $mantenimiento->setIdMantenimiento($id);
            //$Mant = dao.Mant
            //return para mostrar	

