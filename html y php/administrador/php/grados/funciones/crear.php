<?php
try {
    // Incluir la conexión a la base de datos
    include_once "../configuracion/conexion.php";
    
    $grado = $_POST["nivel_educativo"];
    $nivel_educativo = $_POST["grado"];

    // Preparar la sentencia SQL
    $sentencia = $base_de_datos->prepare("INSERT INTO grado ( nivel_educativo,grado) 
        VALUES (?, ?);");
    
    // Ejecutar la sentencia con los datos proporcionados
    $resultado = $sentencia->execute([ $nivel_educativo, $grado]);

    if ($resultado === TRUE) {
        echo "Cambios Guardados";
    } else {
        echo "Algo salió mal. Por favor, verifica que la tabla exista.";
    }
}
catch (PDOException $e) {
    // Capturar y mostrar cualquier error que ocurra
    echo "Error: " . $e->getMessage();
}
?>