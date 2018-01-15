<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\


interface SolucionDao {

    /**
     * Guarda un objeto Solucion en la base de datos.
     * @param solucion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($solucion);
    /**
     * Modifica un objeto Solucion en la base de datos.
     * @param solucion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($solucion);
    /**
     * Elimina un objeto Solucion en la base de datos.
     * @param solucion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($solucion);
    /**
     * Busca un objeto Solucion en la base de datos.
     * @param solucion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($solucion);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!