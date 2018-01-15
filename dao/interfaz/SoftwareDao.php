<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Documentaqué?  \\


interface SoftwareDao {

    /**
     * Guarda un objeto Software en la base de datos.
     * @param software objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($software);
    /**
     * Modifica un objeto Software en la base de datos.
     * @param software objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($software);
    /**
     * Elimina un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($software);
    /**
     * Busca un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($software);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!