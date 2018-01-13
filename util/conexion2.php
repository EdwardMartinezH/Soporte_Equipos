<?php 
function getConn(){
//  $mysqli = mysqli_connect('localhost', 'root', 'Soporte', "soporte");
  $mysqli = mysqli_connect('192.168.1.4', 'root', 'Soporte', "soporte");
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $mysqli->set_charset('utf8');
  return $mysqli;
}