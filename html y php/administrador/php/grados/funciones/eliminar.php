<?php 
require '../configuracion/conexion.php';

$id_grado = $_POST['id_grado'];

try {
    // Iniciar una transacción
    $base_de_datos->beginTransaction();

    
    // Eliminar grados en "asignacion"
    $sqlAsignacion = "DELETE FROM asignacion WHERE grado_id_grado = :id_grado";
    $stmtAsignacion = $base_de_datos->prepare($sqlAsignacion);
    $stmtAsignacion->execute([':id_grado' => $id_grado]);

    // Eliminar grados en "curso"
    $sqlCurso = "DELETE FROM curso WHERE grado_id_grado = :id_grado";
    $stmtCurso = $base_de_datos->prepare($sqlCurso);
    $stmtCurso->execute([':id_grado' => $id_grado]);

    // Eliminar  en "grado"
    $sqlRegistro = "DELETE FROM grado WHERE id_grado = :id_grado";
    $stmtRegistro = $base_de_datos->prepare($sqlRegistro);
    $stmtRegistro->execute([':id_grado' => $id_grado]);


    $base_de_datos->commit();
    header("Location: ../vistas/grados.php");
    exit(); 

} catch (Exception $e) {

    $base_de_datos->rollBack();

    header("Location: ../vistas/grados.php?error=" . urlencode($e->getMessage()));
    exit(); 
}
?>
