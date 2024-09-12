<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/listados.css">
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
                <a class="nav-link active" href="pag_principal.php">Volver</a>
            </div>
        </div>
    </div>
</header>
    <main class="main-container">
        <h1>Listados por curso</h1>
            </head>
            <body>
                <div class="desplegable">
                <label for="gradoSelect">Grado:</label>
                <select id="gradoSelect" onchange="updateTable()">
                    <option value="" disabled selected>Elige un grado</option>
                    <option value="Grado 0">Grado 0</option>
                    <option value="Grado 1">Grado 1</option>
                    <option value="Grado 2">Grado 2</option>
                    <option value="Grado 3">Grado 3</option>
                    <option value="Grado 4">Grado 4</option>
                    <option value="Grado 5">Grado 5</option>
                    <option value="Grado 6">Grado 6</option>
                    <option value="Grado 7">Grado 7</option>
                    <option value="Grado 8">Grado 8</option>
                    <option value="Grado 9">Grado 9</option>
                    <option value="Grado 10">Grado 10</option>
                    <option value="Grado 11">Grado 11</option>
                </select>
                <label for="jornadaSelect">Jornada:</label>
                <select id="jornadaSelect" onchange="updateTable()">
                    <option value="" disabled selected>Elige una jornada</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
                </div>
                <table id="dataTable">
                    <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Grado</th>
                            <th>Curso</th>
                            <th>Jornada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Las filas de la tabla se llenarán dinámicamente -->
                    </tbody>
                </table>
</main>
             <script src="../java/listados.js"></script>
            
        
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