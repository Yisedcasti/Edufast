<?php
include "consulta.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../css/materia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Materias</title>
</head>
<body>
<header class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container d-flex justify-content-between align-items-left">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
            <img src="../../imagenes/logo.png" alt="Logo" width="68" height="68" class="d-inline-block align-text-top">
            <span class="text-dark">EDUFAST</span>
        </a>
        <!-- Boton Responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto fs-5">
              <a class="nav-link active" href="../../admin/pag_principal.php">Volver</a>
              <a class="nav-link  active" type="button"  href="materiascrear.php">Crear </a>
            </div>
        </div>
    </div>
</header>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <footer class="footer-bottom">
        <p>copyright &copy;2024 codeOpacity. designed by <span>EDUFAST</span></p>
        <div class="socials">
            <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/plumapaulista/" class="icon"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/Cedidsanpablo" class="icon"><i class="fab fa-twitter"></i></a>
            <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="icon"><i class="fab fa-google"></i></a>
        </div>
    </footer>
</body>
</html>
