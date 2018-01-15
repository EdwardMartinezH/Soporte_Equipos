<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\


interface CalidadDao {

    /**
     * Guarda un objeto Calidad en la base de datos.
     * @param calidad objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calidad);
    /**
     * Modifica un objeto Calidad en la base de datos.
     * @param calidad objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calidad);
    /**
     * Elimina un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calidad);
    /**
     * Busca un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calidad);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!