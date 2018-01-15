<?php 
function getConn(){
  $mysqli = mysqli_connect('localhost', 'root', 'Soporte', "soporte");
//  $mysqli = mysqli_connect('75.126.207.34', 'soporte', 'Soporte2014', "soporte");
  if (mysqli_connect_errno($mysqli))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $mysqli->set_charset('utf8');
  return $mysqli;
}