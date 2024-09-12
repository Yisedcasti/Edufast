<?php
include "Conexion.php"; 
$sentencia = $base_de_datos->query('SELECT * FROM logro;');
$logro = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>