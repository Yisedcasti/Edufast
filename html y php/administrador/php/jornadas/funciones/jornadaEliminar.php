<?php
if (!isset($_POST["id_jornada"])) {
    exit();
}

$id_jornada = $_POST["id_jornada"];
include_once "../configuracion/conexion.php";

// Eliminar registros relacionados en la tabla 'asignacion'
$eliminarAsignacion = $base_de_datos->prepare("DELETE FROM asignacion WHERE registro_num_doc IN (SELECT num_doc FROM registro WHERE id_jornada = ?);");
$eliminarAsignacion->execute([$id_jornada]);

// Eliminar registros en la tabla 'registro'
$eliminarRegistro = $base_de_datos->prepare("DELETE FROM registro WHERE id_jornada = ?;");
$eliminarRegistro->execute([$id_jornada]);

// Eliminar registros en la tabla 'grado'
$eliminarGrado = $base_de_datos->prepare("DELETE FROM grado WHERE jornada_id_jornada = ?;");
$eliminarGrado->execute([$id_jornada]);

// Eliminar registro en la tabla 'jornada'
$eliminarJornada = $base_de_datos->prepare("DELETE FROM jornada WHERE id_jornada = ?;");
$resultado = $eliminarJornada->execute([$id_jornada]);

if ($resultado && $eliminarAsignacion && $eliminarRegistro && $eliminarGrado) {
    echo '
    <script>
    alert("El usuario ha sido eliminado correctamente.");
    window.location.href = "../vistas/jornadas.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("El usuario NO ha sido eliminado.");
    window.location.href ="../vistas/jornadas.php";
    </script>
    ';
}
?>
