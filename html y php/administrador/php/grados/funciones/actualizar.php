<?php
try {
    include_once "../configuracion/conexion.php";

    $id_grado = $_POST["id_grado"];
    $nivel_educativo = $_POST["nivel_educativo"];
    $grado = $_POST["grado"]; 
    $jornada_id_jornada = $_POST["jornada_id_jornada"]; 

    $cursos = $base_de_datos->prepare("
            UPDATE curso
            SET grado_jornada_id_jornada= ?
            WHERE grado_id_grado= ?");
        $resultadocursos = $cursos->execute([$jornada_id_jornada, $id_grado]);

        $grados = $base_de_datos->prepare("
            UPDATE grado
            SET nivel_educativo = ?, grado = ?, jornada_id_jornada= ?
            WHERE id_grado= ?");
        $resultadogrados = $grados->execute([ $nivel_educativo, $grado,$jornada_id_jornada, $id_grado]);

}
catch (PDOException $e) {
    // Capturar cualquier error y mostrar el mensaje correspondiente
    echo "Error: " . $e->getMessage();
}
?>
