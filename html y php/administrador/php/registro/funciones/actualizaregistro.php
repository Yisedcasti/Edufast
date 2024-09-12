<?php
if (!isset($_GET["id"])) {
    exit("¡ID no especificado!");
}

$id = $_GET["id"];
include_once "../configuracion/conexion.php";

try {
    // Consulta para obtener los datos del usuario
    $sentencia = $base_de_datos->prepare("
    SELECT * FROM registro
    INNER JOIN rol ON registro.id_rol = rol.id_rol
    INNER JOIN jornada ON registro.id_jornada = jornada.id_jornada
    WHERE registro.num_doc = ?
");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);

    if ($persona === FALSE) {
        exit("¡No existe ninguna persona con ese ID!");
    }

    // Obtener todas las opciones de roles
    $sentenciaRoles = $base_de_datos->query("SELECT * FROM rol");
    $roles = $sentenciaRoles->fetchAll(PDO::FETCH_OBJ);

    // Obtener todas las opciones de jornadas
    $sentenciaJornadas = $base_de_datos->query("SELECT * FROM jornada");
    $jornadas = $sentenciaJornadas->fetchAll(PDO::FETCH_OBJ);

    $grados = $base_de_datos->query("SELECT * FROM grado")->fetchAll(PDO::FETCH_OBJ);
    $cursos = $base_de_datos->query("SELECT * FROM curso")->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de los usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/actualizaregistro.css">
</head>
<body>
<header class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container d-flex justify-content-between align-items-left">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
            <img src="../../../imagenes/logo.png" alt="Logo" width="68" height="68" class="d-inline-block align-text-top">
            <span class="text-dark">EDUFAST</span>
        </a>
        <!-- Botón Responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto fs-5">
            <a class="nav-link active" href="<?php echo "../view/perfil.php?id=" . $persona->num_doc ?>.">Volver</a>
            </div>
        </div>
    </div>
</header>
<section class="main-container">
    <h1>Actualizar Datos</h1>
    <div class="formulario">
        <div class="foto_perfil">
            <img src="../../../imagenes/5.jpeg" alt="Perfil">
        </div>
        <form method="post" action="datosEditados.php">
            <div class="form-group">
                <label>Rol</label>
                <select name="id_rol" id="rol" required>
                    <?php foreach ($roles as $rol) : ?>
                        <option value="<?= $rol->id_rol ?>" <?= $rol->id_rol == $persona->id_rol ? 'selected' : '' ?>>
                            <?= htmlspecialchars($rol->rol) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Jornada</label>
                <select name="id_jornada" id="jornada" required>
                    <?php foreach ($jornadas as $jornada) : ?>
                        <option value="<?= $jornada->id_jornada ?>" <?= $jornada->id_jornada == $persona->id_jornada ? 'selected' : '' ?>>
                            <?= htmlspecialchars($jornada->jornada) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
    <label for="id_grado" class="form-label">Grado</label>
    <select class="form-control" name="id_grado" id="id_grado" required>
        <?php foreach ($grados as $grado): ?>
            <option value="<?= $grado->id_grado ?>"><?= $grado->grado ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div class="form-group">
    <label for="id_curso" class="form-label">Curso</label>
    <select class="form-control" name="id_curso" id="id_curso" required>
        <?php foreach ($cursos as $curso): ?>
            <option value="<?= $curso->id_curso ?>"><?= $curso->curso ?></option>
        <?php endforeach; ?>
    </select>
</div>

            <div class="form-group">
                <label>Número de documento</label>
                <input type="number" id="num_doc" name="num_doc" value="<?= htmlspecialchars($persona->num_doc) ?>">
                <label>Tipo de documento</label>
                <select id="tipo_doc" name="tipo_doc">
                    <option <?= $persona->tipo_doc == 'TI' ? 'selected' : '' ?>>TI</option>
                    <option <?= $persona->tipo_doc == 'CC' ? 'selected' : '' ?>>CC</option>
                    <option <?= $persona->tipo_doc == 'RC' ? 'selected' : '' ?>>RC</option>
                    <option <?= $persona->tipo_doc == 'CE' ? 'selected' : '' ?>>CE</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nombres</label>
                <input type="text" id="nombres" name="nombre" value="<?= htmlspecialchars($persona->nombre) ?>">
                <label>Apellidos</label>
                <input type="text" id="apellidos" name="apellido" value="<?= htmlspecialchars($persona->apellido) ?>">
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input type="number" id="celular" name="celular" value="<?= htmlspecialchars($persona->celular) ?>">
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($persona->correo) ?>">
            </div>
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" id="usuario" name="usuario" value="<?= htmlspecialchars($persona->usuario) ?>">
                <label>Contraseña</label>
                <input type="password" id="contraseña" name="contraseña" value="<?= htmlspecialchars($persona->contraseña) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar datos</button>
        </form>
    </div>
</section>
<footer class="footer-bottom">
    <p>copyright &copy;2024 codeOpacity. designed by <span>EDUFAST</span></p>
    <footer class="socials">
        <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="icon"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/plumapaulista/" class="icon"><i class="fab fa-instagram"></i></a>
        <a href="https://x.com/Cedidsanpablo" class="icon"><i class="fab fa-twitter"></i></a>
        <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="icon"><i class="fab fa-google"></i></a>
    </footer>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
