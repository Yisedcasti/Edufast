<?php
if(!isset($_POST["curso"]) || !isset($_POST["id_curso"]) || !isset($_POST["grado_id_grado"]) || !isset($_POST["grado_jornada_id_jornada"])) {
    exit("Datos incompletos");
}

include "conexion.php";

$curso = $_POST["curso"];
$id_curso = $_POST["id_curso"];
$grado_id_grado = $_POST["grado_id_grado"];
$grado_jornada_id_jornada = $_POST["grado_jornada_id_jornada"];
// Si el grado y la jornada existen o se han insertado correctamente, proceder con la inserción en la tabla curso
$sentencia = $base_de_datos->prepare("INSERT INTO curso (curso, id_curso, grado_id_grado, grado_jornada_id_jornada ) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$curso, $id_curso, $grado_id_grado, $grado_jornada_id_jornada]);

if($resultado === TRUE) {
    echo '<script>alert("Insertado correctamente"); window.location.href = "curso.php";</script>';
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista y los datos sean correctos.";
}
?>
