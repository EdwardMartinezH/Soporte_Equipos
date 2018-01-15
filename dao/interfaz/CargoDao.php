<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\


interface CargoDao {

    /**
     * Guarda un objeto Cargo en la base de datos.
     * @param cargo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cargo);
    /**
     * Modifica un objeto Cargo en la base de datos.
     * @param cargo objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cargo);
    /**
     * Elimina un objeto Cargo en la base de datos.
     * @param cargo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cargo);
    /**
     * Busca un objeto Cargo en la base de datos.
     * @param cargo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cargo);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!