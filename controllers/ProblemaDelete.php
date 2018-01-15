<?php

include_once realpath('../control/ProblemaController.php');
ProblemaController::delete(filter_input(INPUT_POST,'idProblema'));

//tiene que volver a listar los problemas, supongo, desde un ajax
