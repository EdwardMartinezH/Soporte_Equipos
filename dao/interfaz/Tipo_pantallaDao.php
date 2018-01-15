<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  \\


interface Tipo_pantallaDao {

    /**
     * Guarda un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_pantalla);
    /**
     * Modifica un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_pantalla);
    /**
     * Elimina un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_pantalla);
    /**
     * Busca un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_pantalla);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!