<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/inicio2.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <header class="containernav">
        <figure class="logo">
            <img src="../imagenes/logo.png" alt="logo">
            <h2>EDUFAST</h2>
        </figure>
            <nav>
                <a href="../index.html" class="item-options">inicio</a>
            </nav>
        
    </header>
    <main class="main-container">
        <form action="pag_principal.php" class="inicio">
        <section class="titulo">
            <header>
                <h1><b>INICIAR SESIÒN</b></h1>
                <p>Ingresa tu numero de documento y contraseña dada por la instituciòn</p>
            </header>
        </section>
        <section class="datos">
            <label for=""> usuario</label>
            <input type="text" name="usuario" required>
        </section>
        <section class="datos">
            <label for="">Contraseña</label>
            <input type="password" name="contraseña" required>
        </section>
        <section class="btn">
            <input type="submit"name="insertar"value="Iniciar">
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

    <script src="../java/script"></script>
</body>

</html>