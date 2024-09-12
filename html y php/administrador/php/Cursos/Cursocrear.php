<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../css/cursosCrearYactuali.css">
    <title>Crear Cursos</title>
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
                <a class="nav-link active" href="curso.php">Volver</a>
            </div>
        </div>
    </div>
</header>

    <main class="main-container">
        <header>
            <h1>Crear Cursos</h1>
        </header>
        <form class="formulario" action="registrarcurso.php" method="POST">
        <section class="cursos">
                <label for="curso">Ingrese el id del curso</label>
                <input type="number" name="id_curso" required>
            </section>
            <section class="cursos">
                <label for="curso">Ingrese curso</label>
                <input type="number" name="curso" required>
            </section>
            <section class="nivel">
                <label for="grado_id">Seleccione grado</label>
                <select name="grado_id_grado" id="">
                    <option value="0">0º</option>
                    <option value="1">1º</option>
                    <option value="2">2º</option>
                    <option value="3">3º</option>
                    <option value="4">4º</option>
                    <option value="5">5º</option>
                    <option value="6">6º</option>
                    <option value="7">7º</option>
                    <option value="8">8º</option>
                    <option value="9">9º</option>
                    <option value="10">10º</option>
                    <option value="11">11º</option>
                </select>
            </section>
            <section class="cursos">
                <label for="jornada_id">Ingrese jornada</label>
                <input type="number" name="grado_jornada_id_jornada" required>
            </section>
            <section class="btn">
                <input type="submit" value="Enviar">
            </section>
        </form>
    </main>
</body>
</html>
