<?php
try {
    // Incluir la conexión a la base de datos
    include_once "conexion.php";
    
    // Obtener los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $id_actividad = $_POST['id_actividad'];
       $nom_actividad = $_POST['nom_actividad'];
       $descrip_actividad = $_POST['descrip_actividad'];
       $fecha_entrega = $_POST['fecha_entrega'];
       $codigo_logro = $_POST['codigo_logro'];

        // Preparar la consulta SQL para actualizar los datos
        $sentencia = $base_de_datos->prepare("
            UPDATE actividad
            SET nom_actividad = ?,descrip_actividad = ?, fecha_entrega = ?, logro_Codigo_logro = ?
            WHERE id_actividad = ?");
        $resultado = $sentencia->execute([$nom_actividad, $descrip_actividad, $fecha_entrega, $codigo_logro, $id_actividad]);

        if ($resultado === TRUE) {
            echo "Cambios Guardados";
            header("Location: actividad.php");
        } else {
            echo "Algo salió mal. Por favor, verifica que la tabla exista.";
        }
    }
} catch (PDOException $e) {
    // Capturar y mostrar cualquier error que ocurra
    echo "Error: " . $e->getMessage();
}
?>
