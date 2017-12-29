<?php
    require_once '../../dao/UsuarioDao.php';
    require_once '../../dto/Usuario.php'; 
    $usuarioDao = new UsuarioDao();
    $usuario = new Usuario();  
    $usuario->setClave("0000");
    $a = $usuarioDao->guardar($usuario);
    var_dump($a);


