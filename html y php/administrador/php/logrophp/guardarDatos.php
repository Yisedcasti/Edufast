<?php
# Verifica que todos los datos necesarios estén presentes
if(
    !isset($_POST["logro"]) || 
    !isset($_POST["descripcion_logro"]) || 
    !isset($_POST["id_materia"]) || 
    !isset($_POST["codigo_logro"])
) {
    echo "Faltan los siguientes datos:<br>";
    if(!isset($_POST["logro"])) echo "Falta el nombre del logro.<br>";
    if(!isset($_POST["descripcion_logro"])) echo "Falta la descripción del logro.<br>";
    if(!isset($_POST["id_materia"])) echo "Falta la materia.<br>";
    if(!isset($_POST["codigo_logro"])) echo "Falta el código del logro.<br>";
    exit();
}

try {
    # Incluye la conexión a la base de datos
    include_once "conexion.php";

    # Recoge los datos del formulario
    $codigo_logro = $_POST["codigo_logro"];
    $logro = $_POST["logro"];
    $descripcion_logro = $_POST["descripcion_logro"];
    $id_materia = $_POST["id_materia"];

    # Prepara la sentencia SQL
    $sentencia = $base_de_datos->prepare("UPDATE logro SET logro = ?, descripcion_logro = ?, id_materia = ? WHERE codigo_logro = ?;");
    
    # Ejecuta la sentencia pasando los valores correspondientes
    $resultado = $sentencia->execute([$logro, $descripcion_logro, $id_materia, $codigo_logro]);

    # Verifica el resultado
    if($resultado === TRUE) {
        echo '<script>
            alert("Cambios guardados correctamente.");
            window.location.href = "logros.php"; // Redirige al listado de logros
        </script>';
    } else {
        echo '<script>
            alert("Algo salió mal. Verifica que la tabla exista y que el código de logro sea correcto.");
            window.history.back(); // Redirige al formulario anterior
        </script>';
    }

} catch (PDOException $e) {
    # Captura cualquier error de la base de datos
    error_log("Error de actualización: " . $e->getMessage()); // Registro en el log
    echo '<script>
        alert("Hubo un error al intentar actualizar el logro.");
        window.history.back(); // Redirige al formulario anterior
    </script>';
}
?>
