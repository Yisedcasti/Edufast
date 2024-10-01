<?php
# Verifica que todos los datos necesarios estén presentes
try {
    # Incluye la conexión a la base de datos
    include_once "conexion.php";

    # Recoge los datos del formulario
    $materia = $_POST["materia"];
    $id_materia = $_POST["id_materia"];

    # Prepara la sentencia SQL
    $sentencia = $base_de_datos->prepare("UPDATE materia SET materia = ? WHERE id_materia = ?;");
    
    # Ejecuta la sentencia pasando los valores correspondientes
    $resultado = $sentencia->execute([$materia, $id_materia]);

    # Verifica el resultado
    if($resultado === TRUE) {
        echo '<script>
            alert("Cambios guardados correctamente.");
            window.location.href = "materia.php"; // Redirige al listado de materias
        </script>';
    } else {
        echo '<script>
            alert("Algo salió mal. Verifica que la tabla exista y que el código de materia sea correcto.");
            window.history.back(); // Redirige al formulario anterior
        </script>';
    }

} catch (PDOException $e) {
    # Captura cualquier error de la base de datos
    error_log("Error de actualización: " . $e->getMessage()); // Registro en el log
    echo '<script>
        alert("Hubo un error al intentar actualizar la materia.");
        window.history.back(); // Redirige al formulario anterior
    </script>';
}
?>
