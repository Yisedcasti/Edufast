<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/MateriasCrearYactuali.css">
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
    <header class="containernav">
        <figure class="logo">
            <img src="../../imagenes/logo.png" alt="logo">
            <h2>EDUFAST</h2>
        </figure>
            <nav>
                <a href="Materia.php" class="item-options">volver</a>
            </nav>
        
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