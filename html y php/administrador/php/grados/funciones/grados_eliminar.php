<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../../css/gradosCrearYactuali.css">
    <title>jornadas</title>
</head>
<body>
    <header class="containernav">
        <figure class="logo">
            <img src="../../imagenes/logo.png" alt="logo">
            <h2>EDUFAST</h2>
        </figure>
            <nav>
                <a href="../grados.html" class="item-options">volver</a>
            </nav>
        
    </header>
    <main class="main-container">
        <header>
            <h1>actualizar Grado</h1>
        </header>
        <form class="formulario" action="">
        <section class="nivel">
            <p>Seleccione el nivel eduactivo</p>
            <input type="radio" id="Primaria" name="nivelEdu" >
            <label for="Primaria">Primaria</label><br>
            <input type="radio" id="Bachillerato" name="nivelEdu" checked>
            <label for="Bachillerato">Bachillerato</label><br>
            <section class="grado">
                <p>selecione los grados que tiene en Primaria</p>
                <input type="checkbox" id="celo" name="grado" >
                <label for="celo"> 0º</label>
                <input type="checkbox" id="primero" name="grado">
                <label for="primero"> 1º</label>
                <input type="checkbox" id="segundo" name="grado">
                <label for="segundo"> 2º</label>
                <input type="checkbox" id="tercero" name="grado">
                <label for="tercero"> 3º</label>
                <input type="checkbox" id="cuarto" name="grado">
                <label for="cuarto"> 4º</label>
                <input type="checkbox" id="quinto" name="grado">
                <label for="quinto"> 5º</label>
            </section>
            <section class="grado">
                <p>Seleccione los grados que tiene en Bachillerato</p>
                        <input type="checkbox" id="sexto" name="grado">
                        <label for="sexto"> 6º</label>
                        <input type="checkbox" id="septimo" name="grado">
                        <label for="septimo"> 7º</label>
                        <input type="checkbox" id="octavo" name="grado">
                        <label for="octavo"> 8º</label>
                        <input type="checkbox" id="noveno" name="grado" checked>
                        <label for="noveno"> 9º</label>
                        <input type="checkbox" id="decimo" name="grado" checked>
                        <label for="decimo"> 10º</label>
                        <input type="checkbox" id="once" name="grado" checked>
                        <label for="once"> 11º</label>
            </section>
        </section>
        <section class="btn">
            <input type="submit"name="insertar"value="actualizar">
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