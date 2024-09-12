<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/MateriasCrearYactuali.css">
    <title>jornadas</title>
</head>
<style>
    .datos input[type="number"] {
   width: 95%;
   padding: 10px;
   margin-bottom: 20px;
   border: 1px solid #ccc;
   border-radius: 4px;
   font-size: 16px;
   font-family: serif;
}
</style>
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
              <a class="nav-link active" href="materia.php">Volver</a>
            </div>
        </div>
    </div>
</header>
    <main class="main-container">
        <form action="registrarmateria.php" method="POST">
            <header><h1>Crear Materia</h1></header>
            <section class="datos">
                <label for="materia">id Materia:</label>
                <input type="number" id="materia" name="id_materia" placeholder="Ingrese el codigo de la materia">
            </section>

            <section class="datos">
                <label for="materia">Nombre de la Materia:</label>
                <input type="text" id="materia" name="materia" placeholder="Ingrese el nombre de la materia" required>
            </section>

            <button type="submit">Asignar Materia</button>
        </form>
    </main>
	
  
</body>
</html>