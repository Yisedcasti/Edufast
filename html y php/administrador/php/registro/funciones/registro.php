<?php
require('../configuracion/conexion.php');

// Obtener roles desde la base de datos
$roles = $base_de_datos->query("SELECT * FROM rol")->fetchAll(PDO::FETCH_ASSOC);

// Obtener jornadas desde la base de datos
$jornadas = $base_de_datos->query("SELECT * FROM jornada")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Coordinador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/registro.css"> 
</head>
<body>
<header class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container d-flex justify-content-between align-items-left">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
            <img src="../../../imagenes/logo.png" alt="Logo" width="68" height="68" class="d-inline-block align-text-top">
            <span class="text-dark">EDUFAST</span>
        </a>
        <!-- Boton Responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item">
          <a class="nav-link" href="../../../admin/pag_principal.php">Volver</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../view/registro_coordinador.php">Coordinador</a></li>
            <li><a class="dropdown-item" href="../view/registro_profesor.php">Profesor</a></li>
            <li><a class="dropdown-item" href="../view/registro_estudiante.php">Estudiante</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </div>
</header>
    <section class="main-container ontainer-fluid">
        <div class="containerRegistro row">
            <div class="title col-md-12">
                <h2>REGISTRAR</h2>
                <form method="post" action="registrarUsuario.php">
                    <div class="formGroup">
                        <label for="id_rol">ROL</label>
                        <select name="id_rol" id="id_rol" required>
                            <option selected disabled>--Seleccionar rol--</option>
                            <?php foreach ($roles as $rol): ?>
                                <option value="<?= $rol['id_rol'] ?>"><?= $rol['rol'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="formGroup">
                        <label for="id_jornada">Jornada</label>
                        <select name="id_jornada" id="id_jornada" required>
                            <option selected disabled>--Seleccionar jornada--</option>
                            <?php foreach ($jornadas as $jornada): ?>
                                <option value="<?= $jornada['id_jornada'] ?>"><?= $jornada['jornada'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Resto del formulario -->
                    <div class="formGroup">
                        <label for="nombre">NOMBRES</label>
                        <input name="nombre" id="nombre" type="text" placeholder="Ingrese nombres" required>
                    </div>
                    <div class="formGroup">
                        <label for="apellido">APELLIDOS</label>
                        <input name="apellido" id="apellido" type="text" placeholder="Ingrese apellidos" required>
                    </div>
                    <div class="formGroup">
                        <label for="tipo_doc">TIPO DE DOCUMENTO</label>
                        <select name="tipo_doc" id="tipo_doc" required>
                            <option value="TI">Tarjeta Identidad</option>
                            <option value="CC">Cédula Ciudadana</option>
                            <option value="CE">Cédula Extranjera</option>
                            <option value="RC">Registro Civil</option>
                        </select>
                    </div>
                    <div class="formGroup">
                        <label for="num_doc">Nº DOCUMENTO</label>
                        <input name="num_doc" id="num_doc" type="number" placeholder="Ingrese número de documento" required>
                    </div>
                    <div class="formGroup">
                        <label for="celular">CELULAR</label>
                        <input name="celular" id="celular" type="number" placeholder="Ingrese número de celular" required>
                    </div>
                    <div class="formGroup">
                        <label for="correo">CORREO</label>
                        <input name="correo" id="correo" type="email" placeholder="Ingrese correo electrónico" required>
                    </div>
                    <div class="formGroup">
                        <label for="usuario">USUARIO</label>
                        <input name="usuario" id="usuario" type="text" placeholder="Ingrese usuario" required>
                    </div>
                    <div class="formGroup">
                        <label for="contraseña">CONTRASEÑA</label>
                        <input name="contraseña" id="contraseña" type="password" placeholder="Ingrese contraseña" required>
                    </div>
                    <div class="container col-2 mt-2">
                        <input class="btn btn-dark" type="submit" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer-bottom">
        <p>Copyright &copy;2024 codeOpacity. Designed by <span>EDUFAST</span></p>
        <footer class="socials">
            <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/plumapaulista/" class="icon"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/Cedidsanpablo" class="icon"><i class="fab fa-twitter"></i></a>
        </footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
