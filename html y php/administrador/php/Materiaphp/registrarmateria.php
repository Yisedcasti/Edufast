<?php

include_once"conexion.php";

$materia=$_POST["materia"];

$materiaregistro = $base_de_datos->prepare("INSERT INTO materia_registro (id_materia,num_doc) VALUES (?);");
$resultado =  $sentencia->execute([$materia,$registro_num_doc]);

$sentencia = $base_de_datos->prepare("INSERT INTO materia (materia) VALUES (?);");
$resultado =  $sentencia->execute([$materia]);


if($resultado === TRUE){ echo'<script>  alert("Insertado correctamente");
 window.location.href = "materia.php";</script>';
}
else { echo "Algo salio mal. Por favor verificar que la tabla exista";
}
?>