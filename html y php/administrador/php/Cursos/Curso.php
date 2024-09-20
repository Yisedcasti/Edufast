<?php 
include "consultarcurso.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../css/cursos.css"/>
    <title>Pagina Principal</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
    <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">EDUFAST</div>
            <div class="list-group list-group-flush my-3">

                <a href="actividad.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Publicaciones</a>

                <a href="asistencia.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Registro</a>

                <a href="curso.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Jornadas</a>

                <a href="grado.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Grados</a>

                <a href="jornada.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Cursos</a>

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
                                <i class="fas fa-user me-2"></i>Maria Camila Torres Jaramillo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

			<div class="mt-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                    <main class="main-container">
        <h1 class="text-dark m-4">Cursos Existentes</h1>
        <section class="container">
        <?php foreach($cursos as $curso): ?>
            <table class="table mb-5">
                <tr>
                    <th colspan="3" class="text-center"><?php echo htmlspecialchars($curso->grado); ?></th>
                </tr>
                <tr>
                    <td class="cursos text-center mt-3"><?php echo htmlspecialchars($curso->curso); ?></td>
                </tr>
                <tr>
                    <td class="cursos text-center mt-3">Jornada: <?php echo htmlspecialchars($curso->jornada); ?></td>
                </tr>
                <tr>
                    <td class="text-center">
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#actualizar<?= $curso->id_curso ?>"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#eliminarModal<?= $curso->id_curso ?>"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </table>
            <?php endforeach; ?>
        </section>

        <!-- Botón Crear  -->
        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#crear">Crear Curso</a>
        </div>

        <!-- Modal Crear -->
        <div class="modal fade" id="crear" tabindex="-1" aria-labelledby="crearLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="crearLabel">Crear Curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario" action="registrarcurso.php" method="POST">
                            <section class="mb-3">
                                <label for="curso">Ingrese curso</label>
                                <input type="number" name="curso" class="form-control" required>
                            </section>
                            <section class="mb-3">
                                <label for="grado_id_grado">Grado</label>
                                <select class="form-control" name="grado_id_grado" id="grado_id_grado" required>
                                    <?php foreach ($grados as $grado): ?>
                                        <option value="<?= $grado['id_grado'] ?>"><?= htmlspecialchars($grado['grado']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </section>
                            <section class="text-center">
                                <input type="submit" value="Enviar" class="btn btn-primary">
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Actualizar -->
        <?php foreach($cursos as $curso): ?>
        <div class="modal fade" id="actualizar<?= $curso->id_curso ?>" tabindex="-1" aria-labelledby="actualizarLabel<?= $curso->id_curso ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="actualizarLabel<?= $curso->id_curso ?>">Actualizar Curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario" action="guardarDatos.php" method="POST">
                            <section class="mb-3">
                                <label for="curso">Curso</label>
                                <input type="number" name="curso" class="form-control" value="<?php echo htmlspecialchars($curso->curso); ?>" required>
                            </section>
                            <section class="mb-3">
                                <label for="grado_id_grado">Grado</label>
                                <select class="form-control" name="grado_id_grado" id="grado_id_grado" required>
                                    <?php foreach ($grados as $grado): ?>
                                        <option value="<?= $grado['id_grado'] ?>" <?= $curso->grado_id_grado == $grado['id_grado'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($grado['grado']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </section>
                            <section class="text-center">
                                <input type="submit" value="Actualizar" class="btn btn-primary">
                            </section>
                            <input type="hidden" name="id_curso" value="<?= $curso->id_curso ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Eliminar -->
        <?php foreach($cursos as $curso): ?>
        <div class="modal fade" id="eliminarModal<?= $curso->id_curso ?>" tabindex="-1" aria-labelledby="eliminarModalLabel<?= $curso->id_curso ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eliminarModalLabel<?= $curso->id_curso ?>">Eliminar Curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Está seguro que desea eliminar el curso <b><?= htmlspecialchars($curso->curso) ?></b>? Esta acción no se puede deshacer.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form method="POST" action="eliminarcurso.php">
                            <input type="hidden" name="id_curso" value="<?= $curso->id_curso ?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </main>
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

