<?php
require_once "conexion.php";

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

try {
    // Preparar la consulta para obtener el rol y la contraseña del usuario
    $sql = "SELECT id_rol, contraseña FROM registro WHERE num_doc = :usuario";
    $stmt = $base_de_datos->prepare($sql);
    
    // Ejecutar la consulta con los parámetros proporcionados
    $stmt->execute([
        ':usuario' => $usuario
    ]);
    
    // Verificar si se encontró el usuario
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id_rol = $row['id_rol'];
        $contraseña_encriptada = $row['contraseña'];
        
        // Desencriptar la contraseña
        $contraseña_desencriptada = openssl_decrypt($contraseña_encriptada, 'AES-128-ECB', 'llave_secreta');

        // Verificar la contraseña
        if ($contraseña_desencriptada === $pass) {
            // Redirigir según el rol del usuario
            switch ($id_rol) {
                case 1:
                    header("Location: pagina_admin.php");
                    exit();
                case 2:
                    header("Location: pagina_usuario.php");
                    exit();
                case 3:
                    header("Location: pagina_moderador.php");
                    exit();
                case 4:
                    header("Location: pagina_supervisor.php");
                    exit();
                default:
                    echo "Rol no válido.";
                    break;
            }
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>
