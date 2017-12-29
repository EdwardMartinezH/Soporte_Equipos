<?php
/**
         *Buscar un equipo         
         *La request debe traer idEquipo
         *
         */        
            $equipo=new Equipo();
            $id=filter_input(INPUT_POST,'idEquipo');
            $equipo->setIdEquipo($id);
            //$equipo = dao.equipo
            //return para mostrar	

