<?php
	require_once '../../dao/ProblemaDao.php';
    require_once '../../dto/Problema.php';
	$problema = new ProblemaDao();
        $problemas = $problema->listar();
        $html = "";
        for ($index = 0; $index < count($problemas); $index++) {
            $id = $problemas[$index]->getIdproblema();
            $problema = $problemas[$index]->getProblema();
            $fecha = $problemas[$index]->getFechaRegistro();
            $equipo = $problemas[$index]->getEquipoequipo();
            $html2 = "<tr>
                    <td>$id</td>
                    <td>$problema</td>
                    <td>$fecha</td>
                    <td>$equipo</td>
                </tr>";
            $html .=$html2;
        }
	echo $html;
?>