<?php
include_once "consulta.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/grados.css">
    <title>jornadas</title>
</head>
<body>
<header class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container d-flex justify-content-between align-items-left">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-success d-flex align-items-center gap-2" href="#">
            <img src="../../../imagenes/logo.png" alt="Logo" width="68" height="68" class="d-inline-block align-text-top">
            <span class="text-dark">EDUFAST</span>
        </a>
        <!-- Boton Responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto fs-5">
              <a class="nav-link active" href="../../../admin/pag_principal.php">Volver</a>
            </div>
        </div>
    </div>
</header>
    <main class="main-container">
        <section class="container">
            <h2>Grados Existentes</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center ">Grado</th>
                        <th class="text-center ">Nivel eduacativo</th>
                        <th class="text-center ">Jornada</th>
                        <th class="text-center " colspan="2">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($grados as $grado) : ?>
                        <td class="text-center"><?php echo $grado->grado?></td>
                        <td class="text-center"><?php echo $grado->nivel_educativo?></td>
                        <td class="text-center"><?php echo $grado->jornada?></td>
                        <td class="text-center">
                            <a class="btn-link" href="../admin/actualizar/grados.html">Editar</a>
                        </td>
                        <td class="actions">
                            <input type="button" onclick="alert('Eliminado exictosamente')" value="Eliminar" class="btn-link">
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button class="create-button"><a href="../admin/crear/grados.html">Crear grado</a></button>
        </section>
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