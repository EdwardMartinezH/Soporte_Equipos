<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Y pensar que Anarchy está hecho en código espagueti...  \\


interface Equipo_has_mantenimientoDao {

    /**
     * Guarda un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($equipo_has_mantenimiento);
    /**
     * Modifica un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($equipo_has_mantenimiento);
    /**
     * Elimina un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($equipo_has_mantenimiento);
    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($equipo_has_mantenimiento);
    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Equipo_has_mantenimiento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEquipo_idEquipo($equipo_has_mantenimiento);
    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Equipo_has_mantenimiento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByMantenimiento_idMantenimiento($equipo_has_mantenimiento);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!