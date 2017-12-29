CREATE TRIGGER ejecucionPorDefecto 
AFTER INSERT ON materia FOR EACH ROW

BEGIN
   -- trigger code
    INSERT INTO `ejecucion`(`comentario`, `salon_id`, `materia_id`, `fecha`, `estado_id`) 
    VALUES ("No hay novedades",null,15,null,2);
END;

#1235 
CREATE TRIGGER  	 	 
AFTER INSERT ON materia FOR EACH ROW
   INSERT INTO `ejecucion`(`comentario`, `salon_id`, `materia_id`, `fecha`, `estado_id`) VALUES ("No hay novedades",null,New.codigo,null,2);
