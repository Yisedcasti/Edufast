<?php
if (!isset($_POST["num_doc"])) {
    exit();
}

$num_doc = $_POST["num_doc"];
include_once "../configuracion/conexion.php";

$sentencia = $base_de_datos->prepare("DELETE FROM registro WHERE num_doc = ?;");
$resultado = $sentencia->execute([$num_doc]);

if ($resultado) {
    echo '
    <script>
    alert("El usuario ha sido eliminado correctamente.");
    window.location.href = "registroeliminar.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("El usuario NO ha sido eliminado.");
    window.location.href = "registroeliminar.php";
    </script>
    ';
}
?>
