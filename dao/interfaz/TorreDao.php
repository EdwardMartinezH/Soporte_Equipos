<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\


interface TorreDao {

    /**
     * Guarda un objeto Torre en la base de datos.
     * @param torre objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($torre);
    /**
     * Modifica un objeto Torre en la base de datos.
     * @param torre objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($torre);
    /**
     * Elimina un objeto Torre en la base de datos.
     * @param torre objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($torre);
    /**
     * Busca un objeto Torre en la base de datos.
     * @param torre objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($torre);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!