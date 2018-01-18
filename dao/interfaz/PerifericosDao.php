<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\


interface PerifericosDao {

    /**
     * Guarda un objeto Perifericos en la base de datos.
     * @param perifericos objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($perifericos);
    /**
     * Modifica un objeto Perifericos en la base de datos.
     * @param perifericos objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($perifericos);
    /**
     * Elimina un objeto Perifericos en la base de datos.
     * @param perifericos objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($perifericos);
    /**
     * Busca un objeto Perifericos en la base de datos.
     * @param perifericos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($perifericos);
  public function listByTipoPeriferico($periferico);  
  public function listByTipoPantalla($periferico);
  public  function listPantallasFree();
  public function listTecladosFree();
  public function listmousesFree();
  public function listImpresorasFree();
  public function listCamarasFree();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!
