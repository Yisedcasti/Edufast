<?php
include "consulta.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../css/materia.css">
    <link rel="stylesheet" href="../../css/nav.css"/>
    <title>Pagina Principal</title>
</head>
<body>
    <div class="d-flex" id="wrapper">

        <div class="listado" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">EDUFAST</div>
            <div class="list-group list-group-flush my-3">

                <a href="../admin/crear/publicaciones_crear.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Publicaciones</a>

                <a href="../php/registro/funciones/registro.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Registro</a>

                <a href="../php/jornadas/vistas/jornadas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Jornadas</a>

                <a href="../php/grados/vistas/grados.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Grados</a>

                <a href="../php/cursos/curso.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Cursos</a>

                <a href="../php/asistencia/asistencia.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Asistencias</a>

                <a href="../php/materiaphp/materia.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Materias</a>

                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Logros</a>
                <a href="../php/actividad/actividad.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Actividades</a>
                <a href="../php/notas/notas.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Notas</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
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
                    <h1 class="text-dark mt-5">MATERIAS</h1>
    <main class="main-container">
    <?php foreach($materias as $materia): ?>
        <section class="cardMaterias">
            <header>
                <h3><?php echo htmlspecialchars($materia->materia); ?></h3>
            </header>
            <p>Codigo Materia:<?php echo htmlspecialchars($materia->id_materia); ?></p>
            <div class="actions">
                <button type="button" class="btn-link" title="Eliminar" data-bs-toggle="modal" data-bs-target="#eliminarModal<?=$materia->id_materia?>">
                    <i class="fas fa-trash-alt"></i>
                </button>
                <button type="button" class="btn-link" title="Actualizar" data-bs-toggle="modal" data-bs-target="#actualizar<?=$materia->id_materia?>">
                    <i class="fas fa-edit"></i>
                </button>
            </div>
            <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#crear">Crear Curso</a>
        </div>
        </section>


        
  <!--FORMULARIO aCTUALIZAR-->
  <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="actualizar<?=$materia->id_materia?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="actualizar<?=$materia->id_materia?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="tituloformulario"><b>Actualizar materia <?= $materia->id_materia ?></b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="guardarDatos.php">
            <input type="hidden" name="id_materia" value="<?=$materia->id_materia?>">
            <div class="mb-3">
              <label for="namemateriaUpdate<?=$materia->id_materia?>" class="form-label">Nombre de Materia</label>
              <input name="materia" type="text" class="form-control" id="namemateriaUpdate<?=$materia->id_materia?>" value="<?=($materia->materia) ?>">
            </div>
            <button type="submit" class="btn btn-primary btnmodal">Actualizar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal eliminar--->
  <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="eliminarModal<?= $materia->id_materia?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminarModalLabel <?=$materia->id_materia?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center"><b>Eliminar Materia</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Está seguro que desea eliminar la Materia <b><?= $materia->id_materia ?></b>? Esta acción no se puede deshacer.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <form method="POST" action="eliminarmateria.php">
            <input type="hidden" name="id_materia" value="<?=$materia->id_materia?>">
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
