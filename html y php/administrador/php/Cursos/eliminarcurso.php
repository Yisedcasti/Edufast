<?php
if(!isset($_POST["id_curso"])) exit();
$id_curso = $_POST["id_curso"];
include_once "conexion.php";
$asignar = $base_de_datos->prepare("DELETE FROM asignacion WHERE curso_id_curso = ?;");
$resultadoasig = $asignar->execute([$id_curso]);

$materia_curso = $base_de_datos->prepare("DELETE FROM materia_curso WHERE id_curso = ?;");
$resultadoasig = $asignar->execute([$id_curso]);

$sentencia = $base_de_datos->prepare("DELETE FROM curso WHERE id_curso = ?;");
$resultado = $sentencia->execute([$id_curso]);

if ($resultado && $resultadoasig) {
    echo '<script>
        alert("eliminado correctamente.");
        window.location.href = "curso.php";
    </script>';
} else {
    echo '<script>
        alert("NO pudo ser eliminado.");
        window.location.href = "curso.php";
    </script>';
}
