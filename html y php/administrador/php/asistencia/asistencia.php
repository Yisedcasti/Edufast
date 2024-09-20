<?php
include_once "consultar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/actividad.css">
    <title>Asistencia</title>
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
              <a class="nav-link  active" type="button"  data-bs-toggle="modal" data-bs-target="#crear">Crear Actividad</a>
            </div>
        </div>
    </div>
</header>

    <main class="main-container ">
      <h1 class="title text-center mt-3">Asistencia</h1>
    <section class="row p-3">
    <?php foreach ($asistencias as $asistencia) : ?>
        <section class="col -lg- 4 col-md-3 col-sm-6 col-12 mb-4">
          <section class="card">
            <section class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($asistencia->fecha_asistencia); ?></h5>
              <p class="card-text"><?php echo htmlspecialchars($asistencia->asistencia); ?></p>
              <p class="crad-text"><?php echo htmlspecialchars($asistencia->registro_num_doc); ?></p>
              <div class="d-flex justify-content-between">

                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#confirmarModal<?php echo $asistencia->id_asistencia ?>">
                <i class="fas fa-trash-alt"></i>
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#actualizarModal<?php echo $asistencia->id_asistencia ?>">
    <i class="fas fa-edit"></i>
</button>

            </div>
            </section>
            </section>
            </section>
            <?php endforeach; ?>
          </section>


<!-- actualizar -->
<?php foreach($asistencias as $asistencia): ?>
<div class="modal fade" id="actualizarModal<?php echo $asistencia->id_asistencia ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Asistencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formActualizar" method="POST" action="Actualizar.php">
                    <input type="hidden" name="id_asistencia" id="id_asistencia" value="<?php echo $asistencia->id_asistencia ?>">
                    <div class="mb-3">
                        <label for="fecha_asistencia" class="form-label">Fecha Asistencia</label>
                        <input type="date" class="form-control" id="fecha_asistencia" name="fecha_asistencia" value="<?php echo $asistencia->fecha_asistencia ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="asistencia" class="form-label">Asistencia</label>
                        <input type="text" class="form-control" id="asistencia" name="asistencia" value="<?php echo $asistencia->asistencia ?>" required>
</div>              
                    <div class="form-group">
    <label for="codigo_logro">Logro</label>
    <select class="form-control" name="codigo_logro" id="codigo_logro" required>
        <?php foreach ($logros as $logro): ?>
            <option value="<?= $logro['codigo_logro'] ?>" 
                <?= isset($_POST['codigo_logro']) && $_POST['codigo_logro'] == $logro['codigo_logro'] ? 'selected' : '' ?>>
                <?= $logro['nombre_logro'] ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>
                    <div class="modal-footer mt-3 justify-content-center">
                    <button type="submit" class="btn btn-dark r">Actualizar</button>
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

          <!-- FORMULARIO CREAR -->
<div class="modal fade" id="crear" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tituloformulario" aria-hidden="true">
<?php if (!empty($mensaje)): ?>
        <div class="alert <?= $claseAlerta; ?> alert-dismissible fade show" role="alert">
            <?= $mensaje; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloformulario">Crear Logro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="mt-5">Crear Actividad</h2>
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <label for="actividad">Actividad</label>
                        <input type="text" class="form-control" id="actividad" name="nom_actividad" required>
                    </div>
                    <div class="form-group">
                        <label for="descrip_actividad">Descripción</label>
                        <textarea class="form-control" id="descripcion_actividad" name="descrip_actividad" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fecha_entrega">Fecha de Entrega</label>
                        <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" required>
                    </div>
                    <div class="form-group">
                        <label for="codigo_logro">Logro</label>
                        <select class="form-control" name="codigo_logro" id="codigo_logro" required>
                            <?php foreach ($logros as $logro): ?>
                                <option value="<?= $logro['codigo_logro'] ?>"><?= $logro['nombre_logro'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer m-3 justify-content-cente">
                        <button type="submit" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                            <!--Eliminar-->
<?php foreach($actividades as $actividad): ?>
    <div class="modal fade" id="confirmarModal<?php echo $actividad->id_actividad ?>" tabindex="-1" role="dialog" aria-labelledby="confirmarModalLabel<?php echo $persona->num_doc ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmarModalLabel<?php echo $actividad->id_actividad ?>">Confirmar Eliminación <?php echo $actividad->nom_actividad ?> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form method="POST" action="eliminar.php">
                        <input type="hidden" name="id_actividad" value="<?php echo $actividad->id_actividad ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

          </main>
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