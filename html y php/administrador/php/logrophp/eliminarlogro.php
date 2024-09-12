<?php
if(!isset($_POST["codigo_logro"])) exit();
$codigo_logro = $_POST["codigo_logro"];
include_once "conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM logro WHERE codigo_logro = ?;");
$resultado = $sentencia->execute([$codigo_logro]);
if ($resultado) {
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
