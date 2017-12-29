<?php
	/**
         *Buscar por id      
         *La request debe traer idUsuario. Recuerde que edward dijo que toca conectar a otra BD
         *
         */
            $usuario=new Usuario();
            $id=filter_input(INPUT_POST,'idUsuario');
            $usuario->setIdUsuario($id);
            //$Usuario = dao.Usuario
            //return para mostrar

