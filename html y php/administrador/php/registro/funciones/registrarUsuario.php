<?php
if (!isset($_POST["id_rol"]) || !isset($_POST["id_jornada"]) || !isset($_POST["nombre"]) || 
    !isset($_POST["apellido"]) || !isset($_POST["tipo_doc"]) || !isset($_POST["num_doc"]) || 
    !isset($_POST["celular"]) || !isset($_POST["correo"]) || !isset($_POST["usuario"]) || 
    !isset($_POST["contraseña"])) {
    exit("Datos incompletos");
}

require('../configuracion/conexion.php');

$id_rol = $_POST["id_rol"];
$id_jornada = $_POST["id_jornada"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo_doc = $_POST["tipo_doc"];
$num_doc = $_POST["num_doc"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

// Hash de la contraseña para mayor seguridad
$hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

try {
    $sentencia = $base_de_datos->prepare("INSERT INTO registro(num_doc, nombre, apellido, tipo_doc, celular, correo, usuario, contraseña, id_rol, id_jornada) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    
    $resultado = $sentencia->execute([$num_doc, $nombre, $apellido, $tipo_doc, $celular, $correo, $usuario, $hashed_password, $id_rol, $id_jornada]);

    if ($resultado === TRUE) {
        echo "INSERTADO CORRECTAMENTE";
    } else {
        echo "Algo salió mal. Por favor verifique que la tabla exista y que los campos sean correctos.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
