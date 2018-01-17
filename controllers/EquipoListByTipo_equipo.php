<?php

include_once realpath('../control/EquipoController.php');
include_once realpath('../control/UsuarioController.php');

  $equipo = EquipoController::listByTipoEquipo(filter_input(INPUT_POST,'$tipo_equipo_id'));
   $listas = '<option value="">Seleccione </option>';
  for ($index = 0; $index < count($equipo); $index++) {
      $id = $equipo[$index]->getId();    
      $usuario= UsuarioController::select($equipo[index]->getUsuario_Id());
      $nombreUsuario=$usuario->getNombre();
      $listas .= "<option value='$id'>$id asignado a $nombreUsuario</option>";
  }
  echo $listas;