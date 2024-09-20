<?php
include_once "consulta.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/principal.css"/>
    <title>Pagina Principal</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">EDUFAST</div>
            <div class="list-group list-group-flush my-3">

                <a href="../admin/crear/publicaciones_crear.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Publicaciones</a>

                <a href="../php/registro/funciones/registro.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Registro</a>

                <a href="../php/jornadas/vistas/jornadas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Jornadas</a>

                <a href="../php/grados/vistas/grados.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Grados</a>

                <a href="../php/cursos/curso.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Cursos</a>

                <a href="logro.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Asistencias</a>

                <a href="../php/materiaphp/materia.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Materias</a>

                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Logros</a>
                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Actividades</a>
                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Notas</a>
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
                    <div class="col-md-12 text-center">
                        <h1>Bienvenido Admin</h1>
                        <p class="lead"> En este espacio podra  hacer varias cosas, podras registrar a los estudiantes, profesores, coordinadores y poderles asignar materias, cursos, grados, tener una asistencia y listado de los alumnos y muchas cosas màs. </p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4  ">
            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-newspaper fs-1"></i>
                        <h1 class="card-title">Publicaciones</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../admin/crear/publicaciones_crear.php" class="btn btn-dark">Publicaciones</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-user-plus fs-1"></i>
                        <h1 class="card-title">Registro</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/registro/funciones/registro.php" class="btn btn-dark">Registrar</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-calendar-alt fs-1"></i>
                        <h1 class="card-title">Jornadas</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/jornadas/vistas/jornadas.php" class="btn btn-dark">Jornadas</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-graduation-cap fs-1"></i>
                        <h1 class="card-title">Grados</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/grados/vistas/grados.php" class="btn btn-dark">Grados</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-book fs-1"></i>
                        <h1 class="card-title">Cursos</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/cursos/curso.php" class="btn btn-dark">Cursos</a>
                    </div>
                </div>
            </section>
            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-check-circle fs-1"></i>
                        <h1 class="card-title">Asistencias</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="listados.php" class="btn btn-dark">Asistencias</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
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
