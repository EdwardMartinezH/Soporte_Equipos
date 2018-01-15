<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\


interface Tipo_perifericoDao {

    /**
     * Guarda un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_periferico);
    /**
     * Modifica un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_periferico);
    /**
     * Elimina un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_periferico);
    /**
     * Busca un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_periferico);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!