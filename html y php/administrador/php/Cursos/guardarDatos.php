<?php
# Verifica que todos los datos necesarios estén presentes
if(
    !isset($_POST["curso"]) || 
    !isset($_POST["id_curso"])
) {
    echo "Faltan los siguientes datos:<br>";
    if(!isset($_POST["curso"])) echo "Falta el nombre de la curso.<br>";
    if(!isset($_POST["id_curso"])) echo "Falta el código de la curso.<br>";
    exit();
}

try {
    # Incluye la conexión a la base de datos
    include_once "conexion.php";

    # Recoge los datos del formulario
    $curso = $_POST["curso"];
    $id_curso = $_POST["id_curso"];

    # Prepara la sentencia SQL
    $sentencia = $base_de_datos->prepare("UPDATE curso SET curso = ? WHERE id_curso = ?;");
    
    # Ejecuta la sentencia pasando los valores correspondientes
    $resultado = $sentencia->execute([$curso, $id_curso]);

    # Verifica el resultado
    if($resultado === TRUE) {
        echo '<script>
            alert("Cambios guardados correctamente.");
            window.location.href = "curso.php"; // Redirige al listado de cursos
        </script>';
    } else {
        echo '<script>
            alert("Algo salió mal. Verifica que la tabla exista y que el código de curso sea correcto.");
            window.history.back(); // Redirige al formulario anterior
        </script>';
    }

} catch (PDOException $e) {
    # Captura cualquier error de la base de datos
    error_log("Error de actualización: " . $e->getMessage()); // Registro en el log
    echo '<script>
        alert("Hubo un error al intentar actualizar la curso.");
        window.history.back(); // Redirige al formulario anterior
    </script>';
}
?>
