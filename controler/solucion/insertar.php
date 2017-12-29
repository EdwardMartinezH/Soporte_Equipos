<?php

/**
         *Insertar una solucion         
         *La request debe traer idProblema, idPeriferico, idSoftware, idTorre, solucion         
         */        
            $solucion=new Solucion();
            $problema=new Problema();
            $problema->setIdProblema(filter_input(INPUT_POST,'idProblema'));
            $solucion->setProblemaproblema($problema);            
            $periferico=new Perifericos();
            $periferico->setIdPerifericos(filter_input(INPUT_POST,'idPeriferico'));
            $solucion->setPerifericosperifericos($periferico);            
            $software=new Software();
            $software->setIdSoftware(filter_input(INPUT_POST,'idSoftware'));
            $solucion->setSoftwaresoftware($software);            
            $torre=new Torre();
            $torre->setIdTorre(filter_input(INPUT_POST,'idTorre'));
            $solucion->setTorretorre($torre);           
            
            $solucion->setSolucion(filter_input(INPUT_POST,'solucion'));
            // guardar en dao                   

