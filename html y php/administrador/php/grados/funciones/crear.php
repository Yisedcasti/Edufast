<?php
try {
    include_once "../configuracion/conexion.php";

    $nivel_educativo = $_POST["nivel_educativo"];
    $grados = isset($_POST['grado']) ? $_POST['grado'] : []; // Array de checkboxes seleccionados
    $jornada_id_jornada = $_POST["jornada_id_jornada"]; 

    if (empty($grados)) {
        echo "Por favor selecciona al menos un grado.";
    } else {

        $sentencia = $base_de_datos->prepare("INSERT INTO grado (nivel_educativo, grado, jornada_id_jornada) 
            VALUES (?, ?, ?);");

        foreach ($grados as $grado) {
            $resultado = $sentencia->execute([$nivel_educativo, $grado, $jornada_id_jornada]);


            if (!$resultado) {
                $base_de_datos->rollBack();
                echo "Algo salió mal al insertar el grado $grado. La transacción ha sido cancelada.";
                exit;
            }
        }

        // Si todo salió bien, confirmar la transacción
        $base_de_datos->commit();
        echo " Guardados correctamente.";
    }
}
catch (PDOException $e) {
    // Capturar cualquier error y mostrar el mensaje correspondiente
    echo "Error: " . $e->getMessage();
}
?>
