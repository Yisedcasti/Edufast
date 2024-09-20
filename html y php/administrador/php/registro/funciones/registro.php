<?php
require('../configuracion/conexion.php');

// Obtener roles desde la base de datos
$roles = $base_de_datos->query("SELECT * FROM rol")->fetchAll(PDO::FETCH_ASSOC);

// Obtener jornadas desde la base de datos
$jornadas = $base_de_datos->query("SELECT * FROM jornada")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../../css/registro.css"/>
    <title>Registro</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">EDUFAST</div>
            <div class="list-group list-group-flush my-3">

                <a href="actividad.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Publicaciones</a>

                <a href="curso.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Jornadas</a>

                <a href="../../grados/vistas/grados.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Grados</a>

                <a href="../php/cursos/vistas/cursos.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Cursos</a>

                <a href="logro.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Asisitencias</a>

                <a href="materia.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Materias</a>

                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Logros</a>
                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Actividades</a>
                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Notas</a>
                <a href="../../../admin/pag_principal.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Volver</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Bienvenido</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Registros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../coordinador/view/registro_coordinador.php">Coordinadores</a></li>
                                <li><a class="dropdown-item" href="../profesor/view/registro_profesor.php">Profesores</a></li>
                                <li><a class="dropdown-item" href="../estudiantes/view/registro_estudiante.php">Estudaintes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Maria Camila Torres Jaramillo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

			<div class="container mt-5">
                <div class="row">
                    <div class="containerRegistro">
            <div class="title col-md-10">
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
                </div>
            </div>

            </div>
        </div>
    </div>
<footer class="footer-bottom bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">©2024 codeOpacity. Designed by <span>EDUFAST</span></p>
        <div class="socials d-flex justify-content-center mt-2">
            <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/plumapaulista/" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/Cedidsanpablo" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
            <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="text-white mx-2"><i class="fab fa-google"></i></a>
        </div>
    </footer>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
