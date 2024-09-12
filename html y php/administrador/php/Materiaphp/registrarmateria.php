<?php
if(!isset($_POST["materia"]) || !isset($_POST["id_materia"])) exit();
include_once"conexion.php";
$materia=$_POST["materia"];
$id_materia=$_POST["id_materia"];
$sentencia = $base_de_datos->prepare("INSERT INTO materia (materia,id_materia) VALUES (?,?);");
$resultado =  $sentencia->execute([$materia,$id_materia]);
if($resultado === TRUE){ echo'<script>  alert("Insertado correctamente");
 window.location.href = "materia.php";</script>';
}
else { echo "Algo salio mal. Por favor verificar que la tabla exista";
}
?>