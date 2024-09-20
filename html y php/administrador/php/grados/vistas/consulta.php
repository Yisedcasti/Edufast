<?php
include_once "../configuracion/conexion.php";

try {
    // Preparar y ejecutar la consulta para obtener grados y jornadas
    $sentencia = $base_de_datos->prepare("
        SELECT grado.*, jornada.* 
        FROM grado 
        INNER JOIN jornada ON grado.jornada_id_jornada = jornada.id_jornada
    ");
    $sentencia->execute();
    $grados = $sentencia->fetchAll(PDO::FETCH_OBJ);

    // Obtener las jornadas
    $jornadas = $base_de_datos->query("SELECT * FROM jornada")->fetchAll(PDO::FETCH_ASSOC);
    $grados2 = $base_de_datos->query("SELECT * FROM jornada")->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
?>