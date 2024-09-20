<?php
try {
    // Incluir la conexión a la base de datos
    include_once "conexion.php";
    
    // Obtener los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $id_asistencia = $_POST['id_asistencia'];
       $fecha_asistencia 	 = $_POST['fecha_asistencia '];
       $asistencia = $_POST['asistencia'];
       $registro_num_doc = $_POST['registro_num_doc'];
       $registro_rol_id_rol = $_POST['registro_rol_id_rol'];
       $registro_jornada_id_jornada = $_POST['registro_jornada_id_jornada'];


        // Preparar la consulta SQL para actualizar los datos
        $sentencia = $base_de_datos->prepare("
            UPDATE asistencia
            SET fecha_asistencia = ?,asistencia = ?, registro_num_doc = ?, registro_rol_id_rol = ?, registro_jornada_id_jornada = ?,
            WHERE id_asistencia = ?");
        $resultado = $sentencia->execute([$fecha_asistencia, $asistencia, $registro_num_doc, $registro_rol_id_rol, $registro_jornada_id_jornada, $id_asistencia]);

        if ($resultado === TRUE) {
            echo "Cambios Guardados";
            header("Location: asistencia.php");
        } else {
            echo "Algo salió mal. Por favor, verifica que la tabla exista.";
        }
    }
} catch (PDOException $e) {
    // Capturar y mostrar cualquier error que ocurra
    echo "Error: " . $e->getMessage();
}
?>