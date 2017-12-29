<?php
/**
         *Buscar un problema         
         *La request debe traer idProblema
         *
         */        
            $problema=new Problema();
            $id=filter_input(INPUT_POST,'idProblema');
            $problema->setIdProblema($id);
            //$problema = dao.problema
            //return para mostrar


