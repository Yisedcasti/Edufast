<?php
include "Conexion.php"; 
$sentencia = $base_de_datos->query('SELECT materia.*, registro.* 
FROM materia
INNER JOIN materia_registro as mr ON mr.id_materia = materia.id_materia
INNER JOIN registro ON registro.num_doc = mr.num_doc
;');
$materias = $sentencia->fetchAll(PDO::FETCH_OBJ);

$registros = $base_de_datos->query("SELECT * FROM registro where id_rol = 3")->fetchAll(PDO::FETCH_ASSOC);

?>