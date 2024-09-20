<?php
if(!isset($_POST["codigo_logro"])) exit();
$codigo_logro = $_POST["codigo_logro"];
$id_materia = $_POST["id_materia"];
include_once "conexion.php";
$actividad = $base_de_datos->prepare("DELETE FROM actividad WHERE logro_codigo_logro = ?;");
$resultadoactivi = $actividad->execute([$codigo_logro]);

$sentencia = $base_de_datos->prepare("DELETE FROM logro WHERE codigo_logro = ?;");
$resultado = $sentencia->execute([$codigo_logro]);

if ($resultado && $$resultadoactivi) {
    echo '<script>
        alert("El logro ha sido eliminado correctamente.");
        window.location.href = "logros.php";
    </script>';
} else {
    echo '<script>
        alert("El logro NO pudo ser eliminado.");
        window.location.href = "logros.php";
    </script>';
}
