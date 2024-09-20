<?php
include "Conexion.php"; 
$sentencia = $base_de_datos->query('SELECT * FROM curso;');
$curso = $sentencia->fetchAll(PDO::FETCH_OBJ);

// Realiza la consulta a la base de datos
try {
    $sentencia = $base_de_datos->prepare("
       SELECT curso.*, grado.*,jornada.*
           FROM curso
            INNER JOIN grado ON curso.grado_id_grado = grado.id_grado
            INNER JOIN jornada ON grado.jornada_id_jornada = jornada.id_jornada
    ");
    $sentencia->execute();
    $cursos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $grados = $base_de_datos->query("SELECT * FROM grado")->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

?>