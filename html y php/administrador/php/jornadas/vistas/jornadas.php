<?php
include_once "consultar.php"; // Incluye el archivo de consulta
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/jornadas.css"> <!-- Tu archivo CSS personalizado -->
    <title>Jornadas</title>
</head>
<body>
    <!-- Barra de navegación -->
    <header class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
                <img src="../../../imagenes/logo.png" alt="Logo" width="68" height="68" class="d-inline-block align-text-top">
                <span class="text-dark">EDUFAST</span>
            </a>
            <!-- Botón responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../admin/pag_principal.php">Volver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../funciones/jornadasCrear.php">Crear</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="container mt-5">
        <h1 class="text-center mb-4">Gestión de Jornadas</h1>

        <!-- Verificar si hay jornadas -->
        <?php if (!empty($jornadas)) : ?>
            <div class="row">
                <?php foreach ($jornadas as $jornada) : ?>
                    <!-- Tarjeta para cada jornada -->
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="../../../imagenes/mañana.jpg" class="card-img-top" alt="Jornada">
                            <div class="card-body">
                                <h5 class="card-title text-center">Jornada</h5>
                                <p class="text-center"><?php echo htmlspecialchars($jornada->jornada); ?></p>
                                <table class="table ">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?php echo htmlspecialchars($jornada->hora_inicio); ?></td>
                                            <td class="text-center"><?php echo htmlspecialchars($jornada->hora_final); ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Inicio</td>
                                            <td class="text-center">Fin</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center ">
                                    <a href="<?php echo "../funciones/jornadasActualizar.php?id=" . $jornada->id_jornada ?>" class="btn btn-dark">Actualizar</a>
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmarModal<?php echo $jornada->id_jornada ?>">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p class="text-center">No se encontraron jornadas.</p>
        <?php endif; ?>
        <?php foreach($jornadas as $jornada): ?>
            <!-- Modal de confirmación -->
            <div class="modal fade" id="confirmarModal<?php echo $jornada->id_jornada ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas eliminar esta jornada?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form method="POST" action="../funciones/jornadaEliminar.php">
                        <input type="hidden" name="id_jornada" value="<?php echo $jornada->id_jornada ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <!-- Footer -->
    <footer class="footer-bottom">
        <p>copyright &copy;2024 codeOpacity. designed by <span>EDUFAST</span></p>
        <footer class="socials">
            <a href="https://www.facebook.com/cedid.sanpablo.3?locale=es_LA" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/plumapaulista/" class="icon"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/Cedidsanpablo" class="icon"><i class="fab fa-twitter"></i></a>
            <a href="mailto:cedidsanpablobosa7@educacionbogota.edu.co" class="icon"><i class="fab fa-google"></i></a>
        </footer>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
