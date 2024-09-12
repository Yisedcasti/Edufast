<?php
include "Conexion.php"; 
$sentencia = $base_de_datos->query('SELECT * FROM curso;');
$curso = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>