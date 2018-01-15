/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\

<?php

interface Tipo_equipoDao {

    /**
     * Guarda un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_equipo);
    /**
     * Modifica un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_equipo);
    /**
     * Elimina un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_equipo);
    /**
     * Busca un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_equipo);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!