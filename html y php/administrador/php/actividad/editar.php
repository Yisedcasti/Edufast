<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edufastoriginal";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id_actividad = $_GET['id'];

$sql = "SELECT * FROM actividad WHERE id_actividad=$id_actividad";
$result = $conn->query($sql);

if ($result === false) {
    die("Error en la consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Procesa los datos de la actividad
} else {
    echo "No se encontró la actividad.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="crear_act.css"/>
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">EDUFAST</div>
            <div class="list-group list-group-flush my-3">

                <a href="index.html" class="list-group-item list-group-item-action bg-transparent second-text active">Inicio</a>

                <a href="asistencia.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Asistencia</a>

                <a href="curso.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Curso</a>

                <a href="grado.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Grado</a>

                <a href="jornada.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Jornada</a>

                <a href="logro.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Logros</a>

                <a href="materia.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Materias</a>

                <a href="nota.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Notas</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Bienvenido</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Maria Camila Torres Jaramillo
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">Visualizar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
        <h2 class="mt-5">Editar Actividad</h2>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id_actividad" value="<?php echo $row['id_actividad']; ?>">
            <div class="form-group">
                <label for="actividad">Actividad</label>
                <input type="text" class="form-control" id="actividad" name="actividad" value="<?php echo $row['actividad']; ?>" required>
            </div>
            <div class="form-group">
                <label for="descripcion_actividad">Descripción</label>
                <textarea class="form-control" id="descripcion_actividad" name="descripcion_actividad" rows="3" required><?php echo $row['descripcion_actividad']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="codigo_logro">Código de Logro</label>
                <input type="text" class="form-control" id="codigo_logro" name="codigo_logro" value="<?php echo $row['codigo_logro']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
            </div>
        
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>