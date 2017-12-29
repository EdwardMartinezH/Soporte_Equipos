<?php

/**
         *Buscar un dept         
         *La request debe traer idDept. Recuerde que edward dijo que toca conectar a otra BD
         *
         */
            $departamento=new Departamento();
            $id=filter_input(INPUT_POST,'idDepartamento');
            $departamento->setIdDepartamento($id);
            //$departamento = dao.Depto
            //return para mostrar	
       