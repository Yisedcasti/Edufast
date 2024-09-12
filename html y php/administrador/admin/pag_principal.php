<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Primera página</title>
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <header class="bg-dark text-white  py-1">
        <div class="container d-flex justify-content-between align-items-center">
            <figure class="d-flex align-items-center mb-0">
                <img src="../imagenes/logo.png" alt="logo" class="me-2" style="width: 68px; height: 68px;">
                <h2 class="mb-0">EDUFAST</h2>
            </figure>
            <nav>
                <a href="../index.php" class="text-white fs-4"><i class="fas fa-sign-out-alt"></i></a>
            </nav>
        </div>
    </header>

    <main class="container my-5">
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

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-book fs-1"></i>
                        <h1 class="card-title">Materias</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/materiaphp/materia.php" class="btn btn-dark">Materias</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-trophy fs-1"></i>
                        <h1 class="card-title">Logros</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/logrophp/logros.php" class="btn btn-dark">Logros</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-tasks fs-1"></i>
                        <h1 class="card-title">Actividades</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="../php/actividad/actividad.php" class="btn btn-dark">Actividades</a>
                    </div>
                </div>
            </section>

            <section class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-star fs-1"></i>
                        <h1 class="card-title">Notas</h1>
                    </div>
                    <div class="card-footer text-center">
                        <a href="notas.html" class="btn btn-dark">Notas</a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="footer-bottom bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">©2024 codeOpacity. Designed by <span>EDUFAST</span></p>
        <div class="socials d-flex justify-content-center mt-2">
            <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/plumapaulista/" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/Cedidsanpablo" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
            <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="text-white mx-2"><i class="fab fa-google"></i></a>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
