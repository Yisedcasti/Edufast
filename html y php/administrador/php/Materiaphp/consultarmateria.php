<?php
include "Conexion.php"; 
$sentencia = $base_de_datos->query('SELECT * FROM materia;');
$materia = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>