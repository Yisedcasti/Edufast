<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar imágenes y información</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/publicaciones_actuali.css">
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
                    <a href="../crear/publicaciones_crear.php" class="nav-link" title="Volver a crear">Volver</a>
                    <a href="../actualizar/publicaciones_actuali2.php" class="nav-link" title="Volver a actualizar info">Información</a>
                    <a href="../eliminar/publicaciones_eliminar.php" class="nav-link" title="Ir a eliminar">Eliminar</a> 
                </div>
            </div>
        </div>
    </header>
    <section class="main-container">
        <h1 class="titulo">Actualizar Imágenes</h1>
        <table>
            <tr>
                <th>Imagen</th>
                <th>Evento</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td class="imagen">
                    <img src="../../imagenes/5.jpeg" alt="">
                </td>
                <td class="evento">
                    <p>Lorem ipsum dolor, sit amet consectetur...</p>
                </td>
                <td class="fecha">
                    <p>29/05/24</p>
                </td>
                <td class="actualizar">
                    <a href="#" title="actualizar inmagen" class="actualizar">Actualizar</a>
                </td>
            </tr>
            <tr>
                <td class="imagen">
                    <img src="../../imagenes/5.jpeg" alt="">
                </td>
                <td class="evento">
                    <p>Lorem ipsum dolor, sit amet consectetur...</p>
                </td>
                <td class="fecha">
                    <p>29/05/24</p>
                </td>
                <td class="actualizar">
                    <a href="#" title="actualizar inmagen" class="actualizar">Actualizar</a>
                </td>
            </tr>
        </table>

        <div class="imagenes">
            <h2>Actualizar</h2> 
            <div class="EstiloImagen">
                <input type="text" name="imagen" placeholder="url de la">
            </div>
            <div class="EstiloEvento">
                <input type="text" name="evento" placeholder="Nombre del evento">
            </div>
            <div class="EstiloFecha">
                <input type="date" name="fecha_evento">
            </div> 
            <div class="btn1">
                <input type="button" value="Actualizar">
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
