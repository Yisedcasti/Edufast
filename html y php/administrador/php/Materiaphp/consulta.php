<?php
include "Conexion.php"; 
$sentencia = $base_de_datos->query('SELECT materia.*, registro.*, curso.*
FROM materia
INNER JOIN materia_registro as mr ON mr.id_materia = materia.id_materia
INNER JOIN registro ON registro.num_doc = mr.num_doc
INNER JOIN materia_curso as mc ON mc.id_materia = materia.id_materia
INNER JOIN curso  ON curso.id_curso = mc.id_curso
;');

$materias = $sentencia->fetchAll(PDO::FETCH_OBJ);

$cursos = $base_de_datos->query("SELECT * FROM curso ")->fetchAll(PDO::FETCH_ASSOC);
$registros = $base_de_datos->query("SELECT * FROM registro where id_rol = 3")->fetchAll(PDO::FETCH_ASSOC);

?>