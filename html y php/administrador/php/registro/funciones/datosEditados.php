<?php
// Verificar si todos los datos necesarios están presentes
if (!isset($_POST["id_rol"]) || !isset($_POST["id_jornada"]) || !isset($_POST["nombre"]) || 
    !isset($_POST["apellido"]) || !isset($_POST["tipo_doc"]) || !isset($_POST["num_doc"]) || 
    !isset($_POST["celular"]) || !isset($_POST["correo"]) || !isset($_POST["usuario"]) || 
    !isset($_POST["contraseña"])) {
    exit("Datos incompletos");
}

try {
    // Incluir la conexión a la base de datos
    include_once "../configuracion/conexion.php";
    
    // Obtener los datos del formulario
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

    // Preparar la consulta SQL para actualizar los datos
    $sentencia = $base_de_datos->prepare("
        UPDATE registro 
        SET id_rol = ?, id_jornada = ?, nombre = ?, apellido = ?, tipo_doc = ?, celular = ?, correo = ?, usuario = ?, contraseña = ? 
        WHERE num_doc = ?;");
    $resultado = $sentencia->execute([$id_rol, $id_jornada, $nombre, $apellido, $tipo_doc, $celular, $correo, $usuario, $contraseña, $num_doc]);
    if ($resultado === TRUE) {
        echo "Cambios Guardados";
    } else {
        echo "Algo salió mal. Por favor, verifica que la tabla exista, así como el número de documento del usuario.";
    }

} catch (PDOException $e) {
    // Capturar y mostrar cualquier error que ocurra
    echo "Error: " . $e->getMessage();
}
?>
