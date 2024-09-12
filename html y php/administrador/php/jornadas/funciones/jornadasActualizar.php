<?php
if (!isset($_GET["id"])) {
    exit("¡ID no especificado!");
}

$id = $_GET["id"];
include_once "../configuracion/conexion.php";

try {
    // Consulta para obtener los datos de la jornada
    $sentencia = $base_de_datos->prepare("
        SELECT * FROM jornada WHERE id_jornada = ?");
    $sentencia->execute([$id]);
    $jornada = $sentencia->fetch(PDO::FETCH_OBJ);

    if ($jornada === FALSE) {
        exit("¡No existe ninguna jornada con ese id!");
    }
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/jornadasCrear.css">
    <title>Actualizar Jornada</title>
</head>
<body>
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
                        <a class="nav-link" href="../vistas/jornadas.php">Volver</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main class="main-container">
        <header>
            <h1>Actualizar jornada</h1>
        </header>
        <form class="formulario" action="actualizar.php" method="POST">
            <input type="hidden" name="id_jornada" value="<?= $jornada->id_jornada ?>">

            <section class="jornada">
                <label for="jornada">Seleccione la jornada:</label>
                <input type="text" id="jornada" name="jornada" value="<?= $jornada->jornada ?>">
            </section>

            <section class="time">
                <label for="hora_inicio">Hora de Inicio:</label>
                <input type="time" id="hora_inicio" name="hora_inicio" value="<?= $jornada->hora_inicio ?>">
            </section>

            <section class="time">
                <label for="hora_final">Hora Final:</label>
                <input type="time" id="hora_final" name="hora_final" value="<?= $jornada->hora_final ?>">
            </section>

            <section class="btn">
                <input type="submit" name="insertar" value="Actualizar">
            </section>
        </form>
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
</body>
</html>
