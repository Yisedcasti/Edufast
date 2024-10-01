<?php

include_once "conexion.php";

$id_materia = $_POST["id_materia"];
$materia = $_POST["materia"];
$num_doc = $_POST["num_doc"];
$id_curso = $_POST["id_curso"];

$consultar = $base_de_datos->prepare("SELECT r.id_rol, r.id_jornada FROM registro AS r WHERE num_doc = ?");
$consultar->execute([$num_doc]);
$resultado = $consultar->fetch(PDO::FETCH_ASSOC);

if (!$resultado) {
    exit("No se encontró información para este número de documento.");
}

$id_rol = $resultado['id_rol'];
$id_jornada = $resultado['id_jornada'];

// Corregido el símbolo de interrogación y la variable
$materiaregistro = $base_de_datos->prepare("INSERT INTO materia_registro (id_materia, num_doc, id_rol, id_jornada) VALUES (?, ?, ?, ?);");
$resultadoregistro = $materiaregistro->execute([$id_materia, $num_doc, $id_rol, $id_jornada]);

$materiarcurso = $base_de_datos->prepare("INSERT INTO materia_curso (id_materia, id_curso) VALUES (?, ?);");
$resultadocurso = $materiarcurso->execute([$id_materia, $id_curso]);

$sentencia = $base_de_datos->prepare("INSERT INTO materia (materia) VALUES (?);");
$resultadoMateria = $sentencia->execute([$materia]); // Cambié el nombre de la variable para evitar confusión

// Verifica el resultado de cada inserción
if ($resultadoregistro && $resultadocurso && $resultadoMateria) {
    echo '<script>
            alert("Insertado correctamente");
            window.location.href = "materia.php";
          </script>';
} else {
    echo "Algo salió mal. Por favor verifica que las tablas existan o que los datos sean válidos.";
}
?>
