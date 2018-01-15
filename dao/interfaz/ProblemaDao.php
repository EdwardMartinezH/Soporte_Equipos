<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Si crees que las mujeres son difíciles, no conoces Anarchy  \\


interface ProblemaDao {

    /**
     * Guarda un objeto Problema en la base de datos.
     * @param problema objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($problema);
    /**
     * Modifica un objeto Problema en la base de datos.
     * @param problema objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($problema);
    /**
     * Elimina un objeto Problema en la base de datos.
     * @param problema objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($problema);
    /**
     * Busca un objeto Problema en la base de datos.
     * @param problema objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($problema);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!