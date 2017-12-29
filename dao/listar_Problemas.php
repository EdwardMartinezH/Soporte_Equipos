<?php 
require_once '../util/conexion.php';
//
function getListasRep(){
  $mysqli = getConn();

  $query = 'SELECT * FROM `problema`';
  $result = $mysqli->query($query);
  $listas = '<table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Problema</th>
                                                    <th>Equipo_idEquipo</th>
                                                    <th>fecha_registro</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<tr role=\"row\" class=\"odd\">
                 
                  <td>$row[idProblema]</td>
                  <td>$row[problema]</td>
                  <td>$row[Equipo_idEquipo]</td> 
                  <td>$row[fecha_registro]</td> 
                 
                 ";
  }
  
  $listas.="  </tbody>
                                        </table>
               
              ";
 
  return $listas;
}

echo getListasRep();


//<?php 
//require_once '../util/conexion.php';
////
//function getListasRep(){
//  $mysqli = getConn();
//  $query = 'SELECT * FROM `area`';
//  $result = $mysqli->query($query);
//  $listas = '<option value="0">Elige una opción</option>';
//  while($row = $result->fetch_array(MYSQLI_ASSOC)){
//    $listas .= "<option value='$row[idarea]'>$row[idarea]. $row[nombre]</option>";
//  }
//  return $listas;
//}
//
//echo getListasRep();

