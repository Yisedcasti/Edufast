<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Publicar Imágenes e Información</title>
    <link rel="stylesheet" href="../../css/publicaciones.css">
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
                    <a href="../pag_principal.php" class="nav-link active">Volver</a>
                    <a href="../actualizar/publicaciones_actuali.php" class="nav-link active">Actualizar</a>
                    <a href="../eliminar/publicaciones_eliminar.php" class="nav-link active">Eliminar</a>
                </div>
            </div>
        </div>
    </header>
    <section class="main-container">
        <div class="form-wrapper">
            <h1>Subir Evento o Noticia </h1>
            <div class="form-container">
                <form action="#" method="post" class="upload-form">
                    <div class="image-upload">
                        <h2>Subir Evento</h2>
                        <div class="form-group">
                            <label for="image">Imagen:</label>
                            <input id="image" class="form-control" type="file" name="imagen">
                        </div>
                        <div class="form-group">
                            <label for="event-name">Nombre del Evento:</label>
                            <input id="event-name" class="form-control" type="text" name="evento" placeholder="Nombre del evento">
                        </div>
                        <div class="form-group">
                            <label for="event-date">Fecha del Evento:</label>
                            <input id="event-date" class="form-control" type="date" name="fecha_evento">
                        </div>
                        <div class="form-group">
                            <input class="submit-btn btn btn-dark" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
                <form action="#" method="post" class="info-form">
                    <div class="info-upload">
                        <h2>Sube Evento</h2>
                        <textarea class="form-control" name="informacion" id="info" cols="40" rows="9" placeholder="Escribe aquí la información"></textarea>
                        <div class="form-group">
                            <input class="submit-btn btn btn-dark" type="submit" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
</body>
</html>
