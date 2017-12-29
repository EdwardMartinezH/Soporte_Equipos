<?php
    require_once '../../dao/ProblemaDao.php';
    $problemaDao = new ProblemaDao;
    $problema = filter_input(INPUT_POST, 'problema');
    $problemaDao->guardar($problema);


    