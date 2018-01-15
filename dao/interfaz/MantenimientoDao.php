<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\


interface MantenimientoDao {

    /**
     * Guarda un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($mantenimiento);
    /**
     * Modifica un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($mantenimiento);
    /**
     * Elimina un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($mantenimiento);
    /**
     * Busca un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($mantenimiento);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!