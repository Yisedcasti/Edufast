<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "consultarLogro.php";
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/logro.css">
    <title>Logro</title>
</head>
<body>
<header class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container d-flex justify-content-between align-items-left">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
            <img src="../imagenes/logo.png" alt="Logo" width="68" height="68" class="d-inline-block align-text-top">
            <span class="text-dark">EDUFAST</span>
        </a>
        <!-- Botón Responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto fs-5">
            <a class="nav-link  active" href="../../admin/pag_principal.php">Volver</a>
            <a class="nav-link  active" type="button"  data-bs-toggle="modal" data-bs-target="#crear">Crear logro</a>
            </div>
        </div>
    </div>
</header>

<main class="main-container">
  <h1 class="title text-center mt-3">LOGROS</h1>
  <section class="row p-3">
    <?php foreach($logro as $item): ?>
      <section class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
        <section class="card">
          <section class="card-body text-center" style="font-family: Arial, Helvetica, sans-serif;">
            <p class="card-text text-left"><b>Código Logro: </b><?php echo htmlspecialchars($item->codigo_logro); ?></p>
            <p class="card-text text-left"><b>Número De Materia: </b><?php echo htmlspecialchars($item->id_materia); ?></p>
            <h5 class="card-title text-center"><b>Título: </b><?php echo htmlspecialchars($item->nombre_logro); ?></h5>
            <p class="card-text"><b>Descripción: </b><?php echo htmlspecialchars($item->descrip_logro); ?></p>
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-outline-dark boton-carrito"  data-bs-toggle="modal" data-bs-target="#eliminarModal<?=$item->codigo_logro?>"><i class="fas fa-trash-alt"></i></button>
              <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#actualizar<?=$item->codigo_logro?>"><i class="fas fa-edit"></i></button>
            </div>
          </section>
        </section>
      </section>
    <!--Eliminar-->
    <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="eliminarModal<?= $item->codigo_logro ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminarModalLabel<?=$item->codigo_logro?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center"><b>Eliminar Logro <?= $item->codigo_logro ?></b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Está seguro que desea eliminar el logro <b><?= $item->codigo_logro ?></b>? Esta acción no se puede deshacer.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <form method="POST" action="eliminarlogro.php">
            <input type="hidden" name="codigo_logro" value="<?=$item->codigo_logro?>">
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
              <!--FORMULARIO aCTUALIZAR-->
  <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="actualizar<?=$item->codigo_logro?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="actualizar<?=$item->codigo_logro?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="tituloformulario"><b>Actualizar Logro <?= $item->codigo_logro ?></b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="guardarDatos.php">
            <input type="hidden" name="codigo_logro" value="<?=$item->codigo_logro?>">
            <div class="mb-3">
              <label for="nameLogroUpdate<?=$item->codigo_logro?>" class="form-label">Nombre del Logro</label>
              <input name="nombre_logro" type="text" class="form-control" id="nameLogroUpdate<?=$item->codigo_logro?>" value="<?= htmlspecialchars($item->nombre_logro) ?>">
            </div>
            <div class="mb-3">
              <label for="descripLogroUpdate<?=$item->codigo_logro?>" class="form-label">Descripción del Logro</label>
              <input name="descrip_logro" type="text" class="form-control" id="descripLogroUpdate<?=$item->codigo_logro?>" value="<?= htmlspecialchars($item->descrip_logro) ?>">
            </div>
            <div class="mb-3">
              <label for="materiaLogroUpdate<?=$item->codigo_logro?>" class="form-label">Materia a la que pertenece</label>
              <select name="id_materia" class="form-select" id="materiaLogroUpdate<?=$item->codigo_logro?>">
                <option value="1" <?= $item->id_materia == 1 ? 'selected' : '' ?>>Español</option>
                <option value="2" <?= $item->id_materia == 2 ? 'selected' : '' ?>>ESPAÑOL</option>
                <option value="3" <?= $item->id_materia == 3 ? 'selected' : '' ?>>INGLES</option>
              </select>
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
  <?php endforeach; ?>

              <!--FORMULARIO CREAR-->
              <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="crear" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tituloformulario" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center" id="tituloformulario"><b>Crear Logro</b></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="registrarLogro.php">
                        <div class="mb-3">
                          <label for="codLogro" class="form-label">Codigo Logro</label>
                          <input placeholder="Escribe el codigo del logro" name="codigo_logro" type="number" class="form-control" id="codLogro">
                          
                        </div>
                        <div class="mb-3">
                          <label for="nameLogro" class="form-label">Nombre del Logro</label>
                          <input placeholder="Escribe el titulo del logro" name="nombre_logro" type="text" class="form-control" id="nameLogro">
                        </div>
                        <div class="mb-3">
                          <label for="descripLogro" class="form-label">Descripciòn del Logro</label>
                          <textarea placeholder="Escribe la descripcion del logro" name="descrip_logro" class="form-control" id="descriplogro" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="descripLogro" class="form-label">Materia a la que pertenece</label>
                          <select name="id_materia" class="form-select" aria-label="Default select example">
                            <option selected>seleccione una materia</option>
                            <option value="1">MATEMATICAS</option>
                            <option value="2">ESPAÑOL</option>
                            <option value="3">INGLES</option>
                          </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btnmodal">Crear</button>
                      </form>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cerrar</button>

                    </div>
                  </div>
                </div>
              </div>
          </main>
          
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