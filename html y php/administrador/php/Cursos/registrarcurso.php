<?php 
require '../configuracion/conexion.php';

$id_grado = $_POST['id_grado'];

try {
    // Iniciar una transacción
    $base_de_datos->beginTransaction();

    // Eliminar registros en "asignacion" que referencian a los cursos
    $sqlAsignacion = "DELETE FROM asignacion WHERE curso_id_curso IN (SELECT id_curso FROM curso WHERE grado_id_grado = :id_grado)";
    $stmtAsignacion = $base_de_datos->prepare($sqlAsignacion);
    $stmtAsignacion->execute([':id_grado' => $id_grado]);

    // Eliminar registros en "curso" que referencian al grado
    $sqlCurso = "DELETE FROM curso WHERE grado_id_grado = :id_grado";
    $stmtCurso = $base_de_datos->prepare($sqlCurso);
    $stmtCurso->execute([':id_grado' => $id_grado]);

    // Verificar si hay registros en "curso" que aún referencian el grado
    $sqlVerificarCurso = "SELECT COUNT(*) FROM curso WHERE grado_jornada_id_jornada = (SELECT jornada_id_jornada FROM grado WHERE id_grado = :id_grado)";
    $stmtVerificarCurso = $base_de_datos->prepare($sqlVerificarCurso);
    $stmtVerificarCurso->execute([':id_grado' => $id_grado]);
    $cantidadCursos = $stmtVerificarCurso->fetchColumn();

    if ($cantidadCursos == 0) {
        // Eliminar en "grado" si no hay registros en curso que referencian
        $sqlRegistro = "DELETE FROM grado WHERE id_grado = :id_grado";
        $stmtRegistro = $base_de_datos->prepare($sqlRegistro);
        $stmtRegistro->execute([':id_grado' => $id_grado]);
    } else {
        // Log si aún hay registros en "curso" que referencian
        echo "Aún existen registros en la tabla curso que referencian el grado.";
        $base_de_datos->rollBack();
        exit;
    }

    // Confirmar transacción
    $base_de_datos->commit();
    
    echo "Registros eliminados exitosamente";

} catch (Exception $e) {
    // Revertir transacción en caso de error
    $base_de_datos->rollBack();
    echo "Error: " . $e->getMessage();
}
?>
