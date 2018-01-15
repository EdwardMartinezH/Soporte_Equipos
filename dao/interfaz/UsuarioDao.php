<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\


interface UsuarioDao {

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param usuario objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuario);
    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param usuario objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuario);
    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuario);
    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuario);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
  public function login($usuario);
}
//That´s all folks!