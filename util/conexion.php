<?php 
function getConn(){
//  $mysqli = mysqli_connect('pescadero.com.co', 'soporte', 'Soporte2014', "soporte");
  $mysqli = mysqli_connect('localhost', 'root', 'Soporte', "soporte");
  echo "se conectar a MySQL: " ;
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $mysqli->set_charset('utf8');
  return $mysqli;
}