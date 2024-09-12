<?php
if(!isset($_POST["nombre_logro"]) || !isset($_POST["descrip_logro"]) || !isset($_POST["id_materia"])) exit();
include_once"conexion.php";
$nombre_logro=$_POST["nombre_logro"];
$descrip_logro=$_POST["descrip_logro"];
$id_materia=$_POST["id_materia"];
$sentencia = $base_de_datos->prepare("INSERT INTO logro (nombre_logro,descrip_logro,id_materia) VALUES (?,?,?);");
$resultado =  $sentencia->execute([$nombre_logro,$descrip_logro,$id_materia]);
if($resultado === TRUE){ echo'<script>  alert("Insertado correctamente");
window.location.href = "logros.php";</script>';
}
else { echo "Algo salio mal. Por favor verificar que la tabla exista";
}
?>