<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "Conexion.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM logro WHERE id = ?;");
$sentencia->execute([$id]);
$logro = $sentencia->fetch(PDO::FETCH_OBJ);
if($logro === FALSE){
    #No existe
    echo "¡No existe alguna logro con ese id!";
    exit();
}
#Si la logro logro existe, se ejecuta esta parte del código
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar logro /title>
</head>
<body>
    <form method="post" action="guardarDatosEditados.php">
        <!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) -->
        <input type="hidden" name="id" value="<?php echo $logro->id; ?>">
<label for="nombre">Nombre:</label>
        <br>
        <input value="<?php echo $logro->nombre ?>" name="nombre" required type="text" id="nombre" placeholder="Escribe tu nombre...">
        <br><br>
<label for="apellidos">Apellidos:</label>
        <br>
        <input value="<?php echo $logro->apellidos ?>" name="apellidos" required type="text" id="apellidos" placeholder="Escribe tus apellidos...">
        <br><br>
        <label for="genero">Género</label>
        <select name="genero" required name="genero" id="genero">
            <!-- 
            Para seleccionar una opción con defecto, se debe poner el atributo selected.
            Usamos el operador ternario para que, si es esa opción, marquemos la opción seleccionada
             -->
            <option value="">--Selecciona--</option>
            <option <?php echo $logro->genero === 'M' ? "selected='selected'": "" ?> value="M">Masculino</option>
            <option <?php echo $logro->genero === 'F' ? "selected='selected'": "" ?> value="F">Femenino</option>
        </select>
        <br><br><input type="submit" value="Guardar cambios">
    </form>
</body>
</html>