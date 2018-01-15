<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    No se fije en el corte de cabello, soy mucho myu rico  \\


interface EquipoDao {

    /**
     * Guarda un objeto Equipo en la base de datos.
     * @param equipo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($equipo);
    /**
     * Modifica un objeto Equipo en la base de datos.
     * @param equipo objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($equipo);
    /**
     * Elimina un objeto Equipo en la base de datos.
     * @param equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($equipo);
    /**
     * Busca un objeto Equipo en la base de datos.
     * @param equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($equipo);
  public function selectByUsuario($equipo);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!