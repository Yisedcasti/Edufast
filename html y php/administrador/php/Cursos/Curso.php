<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cursos.css">
 

    <title>jornadas</title>
</head>
<?php include "consultarcurso.php";
?>
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
            <a href="../../admin/pag_principal.php" class="nav-link active">volver</a>
            <a href="Cursocrear.php" class="nav-link active">crear</a>
            </div>
        </div>
    </div>
</header>
    <main class="main-container">
        <h1 class="text-dark m-4">Cursos Existentes</h1>
        <section class="container">
        <?php foreach($curso as $item): ?>
            <table class="tabla">
                <tr>
                    <th colspan="3" class="text-center"><?php echo htmlspecialchars($item->id_curso); ?></th>
                </tr>
                <tr> 
                    <td class="cursos">
                    <ul>
                        <li class="text-center mt-3"><?php echo htmlspecialchars($item->curso); ?></li>
                        <li class="text-center mt-3">Grado:<?php echo htmlspecialchars($item->grado_id_grado); ?></li>
                        <li class="text-center mt-3">Jornada:<?php echo htmlspecialchars($item->grado_jornada_id_jornada); ?></li>
                    </ul>
                    </td>
                    <td class="actions">
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#actualizar<?=$item->id_curso?>"><i class="fas fa-edit"></i></button>
                    </td>
                    <td class="actions">
                    <button type="button" class="btn btn-outline-dark boton-carrito"  data-bs-toggle="modal" data-bs-target="#eliminarModal<?=$item->id_curso?>"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
                
        <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="eliminarModal<?= $item->id_curso ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminarModalLabel<?=$item->id_curso?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center"><b>Eliminar curso</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Está seguro que desea eliminar el curso <b><?= $item->curso ?></b>? Esta acción no se puede deshacer.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <form method="POST" action="eliminarcurso.php">
            <input type="hidden" name="id_curso" value="<?=$item->id_curso?>">
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
              <!--FORMULARIO aCTUALIZAR-->
  <div class="modal fade" style="font-family: Arial, Helvetica, sans-serif;" id="actualizar<?=$item->id_curso?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="actualizar<?=$item->id_curso?>" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="tituloformulario"><b>Actualizar curso</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="guardarDatos.php">
            <input type="hidden" name="id_curso" value="<?=$item->id_curso?>">
            <div class="mb-3">
              <label for="namecursoUpdate<?=$item->id_curso?>" class="form-label">Numero curso</label>
              <input name="curso" type="text" class="form-control" id="namecursoUpdate<?=$item->id_curso?>" value="<?= htmlspecialchars($item->curso) ?>">
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
  </table>
  </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <footer class="footer-bottom">
        <p>copyright &copy;2024 codeOpacity. designed by <span>EDUFAST</span></p>
        <footer class="socials">
            <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/plumapaulista/" class="icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/Cedidsanpablo" class="icon"><i class="fab fa-twitter"></i></a>
                    <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="icon"><i class="fab fa-google"></i></a>
        </footer>
        </footer>
</body>
</html>